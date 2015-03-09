<?php
/*
Page controller

Authors: Mathias Beke
Date:    March 2015
*/

/**
@brief Namespace containing all page controller objects
*/
namespace Controller;


abstract class Page {

    protected $theme;
    public    $name;
    public    $title;
    public    $notify;


    public function __construct() {

    }


    /**
    Render the template part of the view

    @exception theme file does not exist
    */
    public function template() {
        if(file_exists(THEME_DIR . '/' . $this->theme)) {
            include(THEME_DIR . '/' . $this->theme);
        }
    }
    
    
    public function GET($args) {
        
    }
    
    public function POST() {
        
    }

}