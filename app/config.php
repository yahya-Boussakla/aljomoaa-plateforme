<?php
namespace yahya;

// app folder path

define('APP_PATH', str_replace('\\','/',dirname(realpath(__FILE__))));
define('VIEWS_PATH', APP_PATH . "/views/");
define('FOLDER_PATH' ,dirname(dirname(__FILE__),2));
// define('ASSETS_PATH', APP_PATH."../public/assets/");
// define('')

// database configuration 

define('HOST', 'localhost');
define('USER_NAME', 'root');
define('DATABASE_NAME', 'fil_rouge');
define('PASSWORD', '');

?>