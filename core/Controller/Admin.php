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
        $this->latest_questions = [];
        
        $this->refresh();
    }
    
    
    public function GET($args) {
        
    }
    
    public function POST() {
        
        if(isset($_POST['question'])) {
            
            if(!empty($_POST['question'])) {
                
                $q = new \Model\Question;
                $q->question = $_POST['question'];
                $q->date = time();
                $q->answer = 'none';
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
        
        
        if(isset($_POST['set-answer-id'])) {
            
            $id = intval($_POST['set-answer-id']);
            $question = \Model\Question::getById($id);
            
            if(sizeof($question) != 1) {
                $this->notify = "Couldn't find question";
            }
            $question = $question[0];
            
            $question->answer = $_POST['answer'];
            $question->update();
            
            $this->notify = 'Answer set to: ' . $_POST['answer'];
        }
        
        
        $this->refresh();
    }
    
    
    private function refresh() {
        
        $options = [
            'limit' => 5,
            'orderBy' => ['date', 'DESC'],
        ];
        
        $this->latest_questions = \Model\Question::get($options);
        
    }
    
    
}