<?php
namespace yahya\Models;
session_start();
class Blog extends \yahya\Database\Database{

    public function getData(){
        if (isset($_POST['blogContent'])) {
            $test = $_POST['blogContent'];
            echo $test;
        }
    }
}