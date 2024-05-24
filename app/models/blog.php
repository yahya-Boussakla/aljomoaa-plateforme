<?php
namespace yahya\Models;
session_start();
class Blog extends \yahya\Database\Database{

    public function getData(){
        if (isset($_POST['test'])) {
            echo $_POST['test'];
          }
    }
}