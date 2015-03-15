<?php

/**
 * Home controller
 *
 * Author: Mathias Beke
 * Date:   March 2015
 */

namespace Controller;

class Home extends Page {


    public function __construct() {
        $this->title = SITE_TITLE;
        $this->name = 'home';
        $this->theme = 'home.php';
    }


    public function GET($args) {

    }


}