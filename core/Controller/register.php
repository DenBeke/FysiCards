<?php

/**
 * Admin controller
 *
 * Author: Mathias Beke
 * Date:   March 2015
 */

namespace Controller;

class Register extends Page {

    public $success;

    public function __construct() {
        $this->title = 'Register — ' . SITE_TITLE;
        $this->name = 'register';
        $this->theme = 'register.php';
        $this->success = false;
    }


    public function GET($args) {

    }

    public function POST() {

        if(isset($_POST['name'])) {

            if(empty($_POST['name'])) {
                $this->notify = 'Username cannot be empty';
                return;
            }
            if(empty($_POST['password'])) {
                $this->notify = 'Password cannot be empty';
                return;
            }
            if(empty($_POST['password-confirm'])) {
                $this->notify = 'Confirm password cannot be empty';
                return;
            }


            if($_POST['password'] != $_POST['password-confirm']) {
                $this->notify = "Passwords didn't match";
                return;
            }
            
            $user = new \Model\User;
            $user->name = $_POST['name'];
            
            $user->salt = \Model\User::generateSalt();
            $user->password = \Model\User::hash($_POST['password'], $user->salt);
            
            $user->add();


            $this->notify = 'Successfully registered, ' . $_POST['name'] . '!';
            $this->success = true;

        }

    }


}