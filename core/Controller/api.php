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
            
            $user->setAnswer($question, $answer);
            
            echo 'ok';
        }
        
        catch(\exception $e) {
            echo 'error';
            return;
        }
        
        
    }
    
}
