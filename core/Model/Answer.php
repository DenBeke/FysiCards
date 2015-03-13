<?php

/**
 * Questiond datastructure
 *
 * Author: Mathias Beke
 * Date:   March 2015
 */

namespace Model;

class Answer extends \DenBeke\ORM\ORM {

    public $id;
    public $question;
    public $user;
    public $answer;

}

