<?php
include "../app/config.php";
include "../app/lib/autoload.php";

use yahya\LIB\FrontController;

$frontcontroller = new FrontController();
$frontcontroller->dispatch();

?>