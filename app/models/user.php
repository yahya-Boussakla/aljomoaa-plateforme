<?php
namespace yahya\Models;
session_start();
class User extends \yahya\Database\Database{
    
    public $idUser;
    public $name;
    public $lastName;
    public $email;
    public $pass;
    public $profileImg =  "/opt/lampp/htdocs/jomoaa/public/assets/imgs/imgsmom";

    public function signup(){
        if (isset($_POST['signup'])) {
            if ($_POST['password'] === $_POST['comfirmationPassword']) {
                $this->colectDataUser();
                if ($this->checkUser()) {
                    $this->setProfileImg();
                    $this->register();
                    echo "test";
                    $_SESSION['USER'] = $this->idUser;
                    header("Location: http://localhost/jomoaa");
                }
                else {
                    echo "already exist";
                }
            }
        }
    }

    public function setDataUser($name, $lastName, $email, $idUser, $pass, $profileImg){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->idUser = $idUser;
        $this->pass = $pass;
        $this->profileImg = $profileImg;
        
    }

    public function login(){
        if (isset($_POST['login'])) {
            
            
            
            if (is_array($this->checkUser())) {
                if ($_POST['PASSWORD'] == $this->checkUser()['PASSWORD']) {

                    $dataUser = $this->setDataUser( $this->checkUser()['NOM'],$this->checkUser()['PRENOM'],$_POST['EMAIL'],$this->checkUser()['ID_USER'],$this->checkUser()['PASSWORD'],$this->checkUser()['IMG']);

                    echo $this->checkUser()['NOM'];
                    $_SESSION['USER'] = $this->idUser;
                    header("Location: http://localhost/jomoaa");
                    return $dataUser;
                    
                }
            }
        }
    }

    public function checkUser(){
        $sql = "select * FROM user WHERE EMAIL = :email;";
        $this->query($sql);
        $this->bind(":email" , $_POST['EMAIL']);
        $this->execute();
        $this->rowcount();
        echo $this->email;
        echo "hh";
        $result = $this->get();
        
        if ($this->rowsNum == 0 ) {
            return true;
        }
        else {
            return $result;
        }
    } 

    public function register(){
        $sqli = "insert into user (NOM, PRENOM, EMAIL, PASSWORD, IMG)values(:name , :lastname , :email , :password, :img);";
        $this->query($sqli);
        $this->bind(":name",$this->name);
        $this->bind(":lastname",$this->lastName);
        $this->bind(":email",$this->email);
        $this->bind(":password",$this->pass);
        $this->bind(":img",$this->profileImg);
        $this->execute();
    }

    public function setProfileImg(){
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = dirname(dirname(__FILE__),2)."/public/assets/imgs/" . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                        
        $allowedTypes = array('jpg', 'png', 'jpeg', 'gif', 'bmp');
        if (in_array(strtolower($fileType), $allowedTypes)) {        
            if ($_FILES["file"]["error"] == 0) {
                
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {

                    echo "The file ". htmlspecialchars($fileName). " has been uploaded.";
                    $this->profileImg = $targetFilePath;
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }else {
                echo "Error: " . $_FILES["file"]["error"];
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG, GIF, & BMP files are allowed.";
        }
    }



    public function colectDataUser(){
        
        $this->name = $_POST['name'];
        $this->lastName = $_POST['lastName'];
        $this->email = $_POST['email'];
        $this->pass = $_POST['password'];
    
    }

    public function getDataUser(){
        if (isset($_SESSION['USER'])) {
            
             return $this->checkUser();//[
            //     "name" => $this->name,
            //     "lastName" => $this->lastName,
            //     "email" => $this->email,
            //     "password" => $this->pass,
            //     "idUser" => $this->idUser,
            //     "profileImg" => $this->profileImg
            // ];
        }
    }

    public function logout(){
        if (isset($_POST['logout'])) {
            session_destroy();
            // header("Location: http://localhost/jomoaa/");
        }
    }

}
?>