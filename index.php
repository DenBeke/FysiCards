<?php

/**
 * FysiCards
 *
 * @author Mathias Beke
 * @date  March 2015
 */

require __DIR__ . '/core/error_handler.php';

require __DIR__ . '/core/lib/autoload.php';

require __DIR__ . '/core/config.php';

// include Glue routers
require BASE_DIR . '/core/lib/gluephp/glue.php';


// URL handling
$urls = array(
    'ERROR'                                     => 'Controller\Error',
    INSTALL_DIR                                 => 'Controller\Home',
    INSTALL_DIR . '/api/([^/]+)(/[^/])*'        => 'Controller\Api',
    INSTALL_DIR . '/admin'                      => 'Controller\Admin',
    INSTALL_DIR . '/register'                   => 'Controller\Register',
);

try {

    \DenBeke\ORM\ORM::init($db_config);
    //\Auth\Auth::init('\Model\User::getByName');

    $controller = glue::stick($urls);

    if(get_class($controller) == 'Controller\Error') {
        throw new exception("404 Page not found");
    }


} catch (exception $e) {
    $controller = new \Controller\Error($e->getMessage(), $e->__toString());
}


// include header template
include(THEME_DIR . '/header.php');

// include content template
$controller->template();

// include footer template
include(THEME_DIR . '/footer.php');
