<?php
namespace yahya\Models;
session_start();
class Blog extends \yahya\Database\Database{

    public function insertBlog(){
        if (isset($_POST['blogContent'])) {
            
            $sql = "INSERT INTO blog (ID_USER, ID_ADMIN, TITRE, CATEGORY, CONTENT, BLOG_DATE, ETAT) values(:user, 1, :title, :category, :blog, :postdate, :etat)";
            $this->query($sql);
            $this->bind(':title', $_POST['title']);
            $this->bind(':blog', $_POST['blogContent']);
            $this->bind(':category', $_POST['category']);
            $this->bind(':postdate', date('Y-m-d H:i:s'));
            $this->bind(':user', $_SESSION['USER']);
            $this->bind(':etat', 'en cours');
            $this->execute();
           
        }
    }

    public function getBlogDetails(){
        if (isset($_SESSION['ID_BLOG'])) {
            $sql = "select * from blog where ID_BLOG = :idBlog";
            $this->query($sql);
            $this->bind(':idBlog', $_SESSION['ID_BLOG']);
            $this->execute();
            return $this->get();
        }
    }
    
}