<?php
namespace yahya\Models;

class User extends \yahya\Database\Database{
    // $idUser =  $this->idUser;
    // $name = $this->name;
    // $lastName =  $this->lastName;
    // $email =  $this->email;
    // $password =  $this->password;

    public function signup(){
        if (isset($_POST['signup'])) {
            // if ($_POST['name'] == "" || $_POST['lastName'] == "" || $_POST['email'] == "" || $_POST['password'] == "" || ( $_POST['password'] !=  $_POST['comfirmationPassword'])) {
            //     echo "fil the champ";
            // }
            // else {/
                $data = [
                    "name" => $_POST['name'],
                    "lastName" => $_POST['lastName'],
                    "email" => $_POST['email'],
                    "password" => $_POST['password'],
                    "profileImg" => "C:/xampp/htdocs/jomoaa/public/assets/imgs/imgsmom.jpg"
                ];
                
            // }
            
            if ($this->checkUser($data) == true) {
                $this->register($data);
                $this->setProfileImg();
                
            }
            else {
                echo "already exist";
            }
        }
    }
    
public function checkUser($data){
    $sql = "select * FROM user WHERE EMAIL = :email AND PASSWORD = :password ;";
    $this->query($sql);
    $this->bind(":email" , $data['email']);
    $this->bind(":password" , $data['password']);
    $this->execute();
    $this->rowcount();
    $this->get();
    

    if ($this->rowsNum == 0 ) {
        return true;
    }
    else {
        return false;
    }
} 

public function register($data){
    $sqli = "insert into user (NOM, PRENOM, EMAIL, PASSWORD )values(:name , :lastname , :email , :password);";
    $this->query($sqli);
    $this->bind(":name",$data['name']);
    $this->bind(":lastname",$data['lastName']);
    $this->bind(":email",$data['email']);
    $this->bind(":password",$data['password']);
    $this->execute();
}

public function setProfileImg($data){
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = "C:/xampp/htdocs/jomoaa/public/assets/imgs" . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    
    $allowedTypes = array('jpg', 'png', 'jpeg', 'gif', 'bmp');
    if (in_array(strtolower($fileType), $allowedTypes)) {
                
        if ($_FILES["file"]["error"] == 0) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                echo "The file ". htmlspecialchars($fileName). " has been uploaded.";
                return $data['profileImg'] = $targetFilePath;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Error: " . $_FILES["file"]["error"];
        }
    } else {
        echo "Sorry, only JPG, JPEG, PNG, GIF, & BMP files are allowed.";
    }
}
}
?>