<?php
namespace yahya\Models;
session_start();


class Save extends \yahya\Database\Database{

    public function savedBlog(){
        if (isset($_SESSION['USER'])) {
            if ($_POST['is_saved'] == 'false') {
                echo 'is_saved';
                return true;
            }else{
                echo 'is_not_saved';
                return false;
            }
        }
        else{
            echo 'not_conected';
        }
    }
    

    public function insertSave(){
        if (isset($_SESSION['USER'])) {
            $sql = "insert into enregistrer (ID_USER, ID_BLOG) VALUES(:userId , :blogId)";
            $this->query($sql);
            $this->bind(':blogId',$_POST['id_blog']);
            $this->bind(':userId',$_SESSION['USER']);
            $this->execute();
        }
    }

    public function removeSave(){
        if (isset($_SESSION['USER'])) {
            $sql = "DELETE FROM enregistrer WHERE ID_USER = :userId AND ID_BLOG = :blogId";
            $this->query($sql);
            $this->bind(':blogId',$_POST['id_blog']);
            $this->bind(':userId',$_SESSION['USER']);
            $this->execute();
        }
    }

    


}

?>