<?php

/**
 * Questiond datastructure
 *
 * Author: Mathias Beke
 * Date:   March 2015
 */

namespace Model;

class Question extends \DenBeke\ORM\ORM {
    
    public $id;
    public $question;
    public $date;
    public $colors;
    
    
    public static function getColors() {
        return [
            'Red' => 'red',
            'Blue' => 'blue',
            'Yellow' => 'yellow',
            'White' => 'white',
            'Red and Blue' => 'red-and-blue',
            'Red and Yellow' => 'red-and-yellow',
            'Blue and Yellow' => 'blue-and-yellow',
        ];
    }
    
}

