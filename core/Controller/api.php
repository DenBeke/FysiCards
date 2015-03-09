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
    
    
    public function question() {
        
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
    
}
