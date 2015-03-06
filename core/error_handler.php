<?php
/*
Error handler

Authors: Mathias Beke
Date:    November 2014
*/

set_error_handler('error_handler');

function error_handler($errno, $errmsg, $filename, $linenum, $vars) {
    // error was suppressed with the @-operator
    if ( 0 === error_reporting() )
      return false;

    if ( $errno !== E_ERROR )
      throw new ErrorException(sprintf('%s: %s', $errno, $errmsg), 0, $errno, $filename, $linenum);
}
