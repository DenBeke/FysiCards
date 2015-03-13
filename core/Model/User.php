<?php

/*
 * Model for admin user
 *
 * Author: Mathias Beke
 * Date  : January 2015
 *
 */


namespace Model {

    class User extends \DenBeke\ORM\ORM implements \Auth\AuthUser {

        public $id;
        public $name;
        public $salt;
        public $password;
        
        
        
        public function getAllAnswers() {
            $query = \DenBeke\ORM\DB::table(Answer::getTable())->join(Question::getTable(), Answer::getTable() . '.question', '=', Question::getTable() . '.id')
                ->where('user', '=', $this->id);
                
            $result = $query->get();
            
            return $result;

        }
        
        
        public function getAnswer($question) {
            
            $query = \DenBeke\ORM\DB::table(\Model\Answer::getTable())
                ->select('*')
                ->where('user', '=', $this->id)
                ->where('question', '=', $question )
                ->orderBy('id', 'DESC');
            $result = $query->get();
            
            if(sizeof($result) >= 1) {
                return $result[0]->answer;
            }
            else {
                return 'none';
            }
            
        }
        
        public function getAnswerAll($question) {
            
            $query = \DenBeke\ORM\DB::table(\Model\Answer::getTable())
                ->select('*')
                ->where('user', '=', $this->id)
                ->where('question', '=', $question )
                ->orderBy('id', 'DESC');
            $result = $query->get();
            
            return $result;
            
        }
        
        
        public function setAnswer($question, $answer) {
            
            $a = new \Model\Answer;
            $a->user = $this->id;
            $a->question = $question;
            $a->answer = $answer;
            $a->add();
            
        }
        
        
        /**
         * Get the id of the AuthUser
         *
         * @return id
         */
        public function getId() {
            return $this->id;
        }
        
        
        /**
         * Get the name of the AuthUser
         *
         * @return name
         */
        public function getName() {
            return $this->name;
        }
        
        
        /**
         * Check the password of this user.
         *
         * @param unhashed password
         * @return bool: check if hash from$password and salt matches the AuthUser's hashed pasword
         */
        public function checkPassword($p) {
            return self::hash($p, $this->salt) == $this->password;
        }
        
        
        /**
         * Get the salt of the AuthUser
         *
         * @return salt
         */
        public function getSalt() {
            return $this->salt;
        }
        
        
        /**
         * Generate new salt
         *
         * @return salt
         */
        public static function generateSalt() {
            return uniqid(rand(0, 1000000));
        }
        
        
        /**
         * Hash a string with a salt
         *
         * Hashing is done with SHA512
         *
         * @param text
         * @param salt
         * @return encrypted string
         */
        static public function hash($text, $salt) {
            return hash('sha512', $salt . $text);
        }

        

    }

}