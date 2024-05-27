<?php
namespace yahya\Models;
session_start();
class Blog extends \yahya\Database\Database{

    public function getBlog(){
        if (isset($_POST['blogContent'])) {
            $test = $_POST['mignature'];
            $sql = "insert into blog (mignature) values('$test')";
            $this->query($sql);
            $this->execute();
        }
    }


    public function getDataUser(){
        if (isset($_SESSION['USER'])) {
            $sql = "select * from user where ID_USER = :id";
            $this->query($sql);
            $this->bind(":id" , $_SESSION['USER']);
            $this->execute();
            $result = $this->get();
            return $result;
        }
    }
}