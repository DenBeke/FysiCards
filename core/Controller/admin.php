<?php

/**
 * Admin controller
 *
 * Author: Mathias Beke
 * Date:   March 2015
 */

namespace Controller;

class Admin extends Page {
    
    
    public function __construct() {
        $this->title = 'Admin — ' . SITE_TITLE;
        $this->name = 'admin';
        $this->theme = 'admin.php';
    }
    
    
    public function GET($args) {
        
    }
    
    public function POST() {
        
        if(isset($_POST['question'])) {
            
            if(!empty($_POST['question'])) {
                
                $q = new \Model\Question;
                $q->question = $_POST['question'];
                $q->date = time();
                $q->colors = '';
                
                foreach (\Model\Question::getColors() as $name => $class) {
                    if(isset($_POST[$class]) and $_POST[$class] == true) {
                        $q->colors .= $class . ',';
                    }
                }
                
                $q->add();
                
                $this->notify = 'Added question';
                
            }
            else {
                $this->notify = 'Question title cannot be empty';
            }
            
        }
        
    }
    
    
}