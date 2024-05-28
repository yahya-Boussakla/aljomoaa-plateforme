<?php
namespace yahya\Models;
session_start();
class Blog extends \yahya\Database\Database{

    public function getBlog(){
        if (isset($_POST['blogContent'])) {
            
            $sql = "insert into blog (TITLE ,BLOG_CONTENT, CATEGORY, MIGNATURE, ID_USER) values(:title, :blog, :category, :mignature, :user)";
            $this->query($sql);
            $this->bind(':title', $_POST['title']);
            $this->bind(':blog', $_POST['blogContent']);
            $this->bind(':category', $_POST['category']);
            $this->bind(':mignature', $_POST['mignature']);
            $this->bind(':user', $_SESSION['USER']);
            $this->execute();
        }
    }

    public function insertBlog(){

    }


   
}