<?php
namespace yahya\Models;

class Student extends \yahya\Database\Database{
    public $students;
    protected $email;
    protected $password;


    public function getAllStudents(){
        $sql = "SELECT * FROM utilisateur";
        $this->query($sql);
        $this->execute();
        return $this->students = $this->get();
    }

    public function login(){
        if (isset($_POST['login'])) {
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            $this->findOne('utilisateur', 'email', ':Email', $this->email);

            if ($this->result == \yahya\Database\Database::NO_MATCHE_VALUE) {
                return "wrong email";
            }
            else {
                if ($this->result['PASSWORD'] == $this->password) {
                    return "login sucssesful";
                }
                else{
                    return "wrong password";
                }
            }
        }
    }


}
?>