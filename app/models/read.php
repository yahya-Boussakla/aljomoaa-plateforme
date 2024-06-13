<?php
namespace yahya\Models;
// session_start();


class Read extends \yahya\Database\Database{

    public function readedBlog(){
        if (isset($_SESSION['USER'])) {
            $sql = "select COUNT(*) from lire where ID_BLOG = :blogId AND ID_USER = :userId;";
            $this->query($sql);
            $this->bind(':blogId',$_POST['ID_BLOG']);
            $this->bind(':userId',$_SESSION['USER']);
            $this->execute();
            return $this->get()['COUNT(*)'];
        }
    }
        
    
    public function insertRead(){
        if (isset($_SESSION['USER'])) {
            $sql = "insert into lire (ID_USER, ID_BLOG) VALUES(:userId , :blogId)";
            $this->query($sql);
            $this->bind(':blogId',$_POST['ID_BLOG']);
            $this->bind(':userId',$_SESSION['USER']);
            $this->execute();
        }
    }

}

?>