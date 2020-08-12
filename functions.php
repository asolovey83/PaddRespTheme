<?php

define('PADD_THEME_NAME','Palladiumize Responsive');
define('PADD_THEME_VERS','1.0');
define('PADD_THEME_SLUG','pallresp');
define('PADD_THEME_SYMB','Pd 46');
define('PADD_NAME_SPACE','padd');
define('PADD_GALL_THUMB_W',530);
define('PADD_GALL_THUMB_H',262);
define('PADD_LIST_THUMB_W',125);
define('PADD_LIST_THUMB_H',125);
define('PADD_THEME_FWVER','3.1.0');

define('PADD_THEME_PATH', get_template_directory());
define('PADD_FUNCT_PATH', PADD_THEME_PATH . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR);

require ABSPATH . 'wp-includes' . DIRECTORY_SEPARATOR . 'class-feed.php';
require ABSPATH . 'wp-includes' . DIRECTORY_SEPARATOR . 'class-simplepie.php';

require PADD_FUNCT_PATH . 'class-socialnetwork.php';
require PADD_FUNCT_PATH . 'class-socialbookmark.php';
require PADD_FUNCT_PATH . 'class-twitter.php';
require PADD_FUNCT_PATH . 'class-pagination.php';
require PADD_FUNCT_PATH . 'class-input.php';
require PADD_FUNCT_PATH . 'class-widgets.php';

require PADD_THEME_PATH . DIRECTORY_SEPARATOR . 'administration' . DIRECTORY_SEPARATOR . 'options-functions.php';

require PADD_FUNCT_PATH . 'defaults.php';
require PADD_FUNCT_PATH . 'functions.php';
require PADD_FUNCT_PATH . 'hooks.php';
require PADD_FUNCT_PATH . 'setup.php';
