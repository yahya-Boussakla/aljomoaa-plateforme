<?php
namespace yahya;

// app folder path

define('APP_PATH', str_replace('\\','/',dirname(realpath(__FILE__))));
define('VIEWS_PATH', APP_PATH . "/views/");
// define('')

// database configuration 

define('HOST', 'localhost');
define('USER_NAME', 'root');
define('DATABASE_NAME', 'bp14');
define('PASSWORD', '');

?>