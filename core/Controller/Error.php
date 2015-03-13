<?php
/*
Error controller

Authors: Mathias Beke
Date:    November 2014
*/

namespace Controller {


    class Error extends Page {

        public $pageName = 'error';
        public $message;
        public $trace;

        public function __construct($m = Null, $t = Null) {
            parent::__construct();
            $this->theme = 'error.php';
            $this->pageTitle = 'Error - ' . SITE_TITLE;
            $this->message = $m;
            $this->trace = $t;
        }


    }


}
