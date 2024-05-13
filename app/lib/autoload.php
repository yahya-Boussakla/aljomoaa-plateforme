<?php
namespace yahya\LIB;

class Autoload
{
    public static function autoload($class){

        $class = strtolower($class);
        $class = str_replace("yahya", "", $class);
        $fullPath = APP_PATH . $class . ".php";
        $fullPath = str_replace("\\" , "/" , $fullPath);
        if (file_exists($fullPath)) {
            require $fullPath;
        }
    }
}

spl_autoload_register(__NAMESPACE__ . '\Autoload::autoload');
?>