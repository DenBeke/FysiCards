<?php

namespace Controller;


class Api {
    
    public function __construct() {
        
    }
    
    public function GET($args) {

        $this->{$args[1]}($args);
        
        die;
        
    }
    
    
    public function POST() {
        
    }
    
    
    public function question($args) {
        
        $options = [
            'limit' => 1,
            'orderBy' => ['date', 'DESC'],
        ];
        
        $question = \Model\Question::get($options);
        if(sizeof($question) === 1) {
            $question = $question[0];
        }
        
        include THEME_DIR . '/question.php';
        
    }
    
    public function save_answer($args) {
        
        try {
            $args     = explode(',', $args[2]);
            $question = $args[0];
            $answer   = $args[1];
            
            $user = \Auth\Auth::user();
            $question = \Model\Question::getById($question);
            if(sizeof($question) != 1) {
                echo 'Invalid question';
                return;
            }
            else {
                $question = $question[0];
            }
            
            if($question->answer != 'none') {
                echo 'Too late!';
                return;
            }
            
            foreach ($user->getAnswerAll($question->id) as $a) {
                $a = new \Model\Answer($a);
                $a->remove();
            }
            
            $user->setAnswer($question->id, $answer);
            
            echo 'Answer received!';
        }
        
        catch(\exception $e) {
            echo 'Error: ' . $e->getMessage();
            return;
        }
        
        
    }
    
}
