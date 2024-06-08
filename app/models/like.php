<?php
namespace yahya\Models;
session_start();


class Like extends \yahya\Database\Database{

    public function likedBlog(){
        if (isset($_SESSION['USER'])) {
            if ($_POST['is_liked'] == 'false') {
                echo 'is_liked';
                return true;
            }else{
                echo 'is_not_liked';
                return false;
            }
        }
        else{
            echo 'not_conected';
        }
    }
    

    public function insertLike(){
        if (isset($_SESSION['USER'])) {
            $sql = "insert into adorer (ID_USER, ID_BLOG) VALUES(:userId , :blogId)";
            $this->query($sql);
            $this->bind(':blogId',$_POST['id_blog']);
            $this->bind(':userId',$_SESSION['USER']);
            $this->execute();
        }
    }

    public function removeLike(){
        if (isset($_SESSION['USER'])) {
            $sql = "DELETE FROM adorer WHERE `adorer`.`ID_USER` = :userId AND `adorer`.`ID_BLOG` = :blogId";
            $this->query($sql);
            $this->bind(':blogId',$_POST['id_blog']);
            $this->bind(':userId',$_SESSION['USER']);
            $this->execute();
        }
    }

    


}

?>