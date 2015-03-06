<?php

/**
 * Global configuration
 */

define('BASE_DIR', __DIR__ . '/..');

define('SITE_TITLE', 'FysiCards');
define('SITE_URL', 'http://localhost:8888/FysiCards');
define('INSTALL_DIR', '/FysiCards');


define('THEME_DIR', BASE_DIR . '/theme');

define('DEBUG', true);

$db_config = [
    'driver'    => 'mysql', // Db driver
    'host'      => 'localhost',
    'database'  => 'fysicards',
    'username'  => 'root',
    'password'  => 'root',
];

date_default_timezone_set('Europe/Brussels');