<?php

/**
 * Interface for an authentication user
 * Pass objects of this Interface to the Auth module
 *
 * Author: Mathias Beke
 * Date:   February 2015
 */

namespace Auth {
    

    /**
     * Interface for an authentication user
     * Pass objects of this Interface to the Auth module
     */
    interface AuthUser {
    
    
        /**
         * Get the id of the AuthUser
         *
         * @return id
         */
        public function getId();
        
    
        /**
         * Get the name of the AuthUser
         *
         * @return name
         */
        public function getName();
        
        
        /**
         * Check the password of this user.
         *
         * @param unhashed password
         * @return bool: check if hash from$password and salt matches the AuthUser's hashed pasword
         */
        public function checkPassword($password);
      
      
        /**
         * Get the salt of the AuthUser
         *
         * @return salt
         */
        public function getSalt();
        
        
        /**
         * Generate new salt
         *
         * @return salt
         */
        public static function generateSalt();
    
    }
    
    
}