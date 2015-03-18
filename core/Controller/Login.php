<?php
/*
Login controller

Authors: Mathias Beke
Date:    January 2015
*/

namespace Controller {


    class Login extends \Controller\Page {

        public $name = 'login';

        public function __construct() {
            parent::__construct();
            $this->theme = 'login.php';
            $this->title = 'Login - ' . SITE_TITLE;

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                if(!empty($_POST['name']) and !empty($_POST['password'])) {
                    
                    if(isset($_POST['remember']) and $_POST['remember'] == 'true') {
                        $remember = true;
                    }
                    else {
                        $remember = false;
                    }
                    
                    if(\ Auth\Auth::attempt($_POST['name'], $_POST['password'], $remember) ) {
                        header("Refresh:0");
                    }
                    else {
                        $this->notify = 'Wrong username or password';
                    }

                }

            }

        }


    }

}
