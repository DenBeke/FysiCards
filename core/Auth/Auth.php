<?php


/**
 * Simple Authentication for PHP
 *
 * Author: Mathias Beke
 * Date:   February 2015
 */


namespace Auth {
    

    /**
     * Simple authentication for PHP
     */
    class Auth {
        
        
        public static $debug = false;
        public static $callback = Null;
        public static $login = false;
        public static $user = Null;
        
        
        /**
         * Initialize the Auth module
         *
         * This argument of this function is the name of a callback function
         * where the AuthUser instances can be found
         *   If you have a static function getUserByName on a class UserDB
         *   you must pass '\UserDB::getUserByName' to this function
         *   and the Auth module will call \UserDB::getUserByName($username)
         *   to find users.
         *
         * @param function to call to get AuthUsers by their name
         * @post Auth class is initialized
         */
        public static function init($get_auth_user_func, $debug = false) {
            
            static::$callback = $get_auth_user_func;
            static::$login = false;
            
            if(session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            
            if(isset($_SESSION['login']) and $_SESSION['user-name'] and false) {
                if($_SESSION['login']) {
                    $user = call_user_func(self::$callback, $_SESSION['user-name']);
                    if(sizeof($user) == 1) {
                        static::$user = $user[0];
                        static::$login = true;
                        return;
                    }
                }
            }
            else if(static::checkCookie()) {
                return;
            }
            
        }
        
        
        /**
        * Destroy current session
        * -> this will not remove session data!
        *
        * @pre Auth should be initialized
        */
        public static function destroy() {
            static::requireInitialized();
            session_destroy();
        }
        
        
        /**
         * Attempt login with the given username and password
         *
         * @param username
         * @param password
         * @return boolean (true if attempt succeeded)
         *
         * @post on successful login, user is saved
         */
        public static function attempt($username, $password, $remember) {
            static::requireInitialized();
            
            $user = call_user_func(self::$callback, $username);
            if(sizeof($user) == 1) {
                $user = $user[0];
                
                if($user->checkPassword($password)) {
                    static::login($user);
                    if($remember) {
                        static::setCookie($user);
                    }
                    
                    return true;
                }
            }
            return false;
        }
        
        
        /**
         * Check if the user is logged in
         *
         * @pre Auth should be initialized
         */
        public static function check() {
            static::requireInitialized();
            return static::$login;
        }
        

        /**
         * Check if there is a valid cookie set (for a user)
         *
         * @return user cookie logged in
         * @post user set
         * @post logged-in set
         */
        public static function checkCookie() {
            if(empty($_COOKIE['LOGIN'])) {
                return false;
            }
            else {
                try {
                    $cookie = explode('.', $_COOKIE['LOGIN']);
                    $user = call_user_func(self::$callback, $cookie[0]);
                
                    if(!sizeof($user) == 1) {
                        return false;
                    }
                    
                    $user = $user[0];
                    
                    if($user->password != $cookie[1]) {
                        return false;
                    }
                    else {
                        static::login($user);
                        return true;
                    }
                    
                
                }
                catch (\exception $e) {
                    return false;
                }
                
            }
        }
        
        /**
         * Set cookie
         */
        public static function setCookie($user) {
            setcookie('LOGIN', $user->name . '.' . $user->password, strtotime('+10 days'));
        }
        
        
        /**
         * Login the given AuthUser to the application
         *
         * @param AuthUser
         *
         * @pre Auth should be initialized
         * @post user is logged in
         */
        public static function login($user) {
            static::requireInitialized();
            static::$login = true;
            static::$user = $user->getName();
            $_SESSION['login'] = true;
            $_SESSION['user-name'] = $user->getName();
            
        }
        
        
        /**
         * Logout the given AuthUser from the application
         *
         * @pre Auth should be initialized
         * @post user is logged out
         */
        public static function logout() {
            static::requireInitialized();
            $_SESSION['login'] = false;
            $_SESSION['user-name'] = null;
        }
        
        
        /**
         * Get the current logged in user
         *
         * @return user
         * @pre Auth should be initialized
         */
        public static function user() {
            static::requireInitialized();
            return static::$user;
        }
        
        
        public static function requireInitialized() {
            if(static::$callback == Null) {
                throw new \exception("Auth not initialized.");
            }
        }
        
    }
    
    
    /*
    class Test {
    
    
        public static function hey() {
            echo 'hey()';
        }
    
    }
    
    call_user_func('\Auth\Test::hey');
    */
    
}

