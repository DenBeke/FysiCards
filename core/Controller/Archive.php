<?php

/**
 * Home controller
 *
 * Author: Mathias Beke
 * Date:   March 2015
 */

namespace Controller;

class Archive extends Page {


    public function __construct() {
        $this->title = 'Archive - ' . SITE_TITLE;
        $this->name = 'archive';
        $this->theme = 'archive.php';
    }


    public function GET($args) {

        
        $user = \Auth\Auth::user();
        
        $this->answers = 0;
        $this->correct = 0;
        
        foreach ($user->getAllAnswers() as $a) {
            $this->answers++;
            
            if($user->getAnswer($a->id) == \Model\Question::getById($a->id)[0]->answer) {
                $this->correct++;
            }
            
        }
        
    }


}