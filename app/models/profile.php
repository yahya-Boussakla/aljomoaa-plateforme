<?php
namespace yahya\Models;
session_start();


class Profile extends \yahya\Database\Database{

    public function myBlogs(){
        $sql = "select NOM, PRENOM, IMG, ID_BLOG, ID_USER ,ID_ADMIN ,TITRE ,CATEGORY ,CONTENT ,BLOG_DATE ,ETAT FROM blog INNER JOIN user USING(ID_USER) WHERE ID_USER = :userId and etat = 'en cours'";
        $this->query($sql);
        $this->bind(':userId', $_SESSION['USER']);
        $this->execute();
        return $this->getAll();
    }

    public function draftBlogs(){
        $sql = "select NOM, PRENOM, IMG, ID_BLOG, ID_USER ,ID_ADMIN ,TITRE ,CATEGORY ,CONTENT ,BLOG_DATE ,ETAT FROM blog INNER JOIN user USING(ID_USER) WHERE ID_USER = :userId and etat = 'brouillan'";
        $this->query($sql);
        $this->bind(':userId', $_SESSION['USER']);
        $this->execute();
        return $this->getAll();
    }

    public function saveBlogIds(){
        $sql = "SELECT ID_BLOG FROM enregistrer INNER JOIN user USING(ID_USER) WHERE ID_USER = :userId;";
        $this->query($sql);
        $this->bind(':userId', $_SESSION['USER']);
        $this->execute();
        return $this->getAll();
    }

    public function saveBlogs(){
        $data = [];
        var_dump($this->saveBlogIds());
        foreach ($this->saveBlogIds() as $key => $value) {
            $test = $value['ID_BLOG'];
            $sql = "select NOM, PRENOM, IMG, ID_BLOG, ID_USER ,ID_ADMIN ,TITRE ,CATEGORY ,CONTENT ,BLOG_DATE ,ETAT FROM blog INNER JOIN user USING(ID_USER) WHERE ID_BLOG = '$test'";
            $this->query($sql);
            $this->execute();
            $data = array_push($this->get(),$data);
        }
        return $data;
    }

}

?>