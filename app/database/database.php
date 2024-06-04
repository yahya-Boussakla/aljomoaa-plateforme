<?php
namespace yahya\Database;
use PDO;
use PDOException;


class Database{

    private $host = HOST;
    private $username = USER_NAME;
    private $pi = PASSWORD;
    private $dbname = DATABASE_NAME;

    const NO_MATCHE_VALUE = "no matches value";
    public $rowsNum;
    protected $result = [];

    private $pdo;
    private $stmt;

    public function __construct(){
        $dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->dbname;
        try {
            $this->pdo = new PDO($dsn, $this->username , $this->pi);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die('there is an issue: ' . $e->getMessage());
        }
    }

    public function __destruct(){
        if ($this->stmt !== null) {
            $this->stmt = null;
        }
        if ($this->pdo !== null) {
            $this->pdo = null;
        }
    }

    public function query($sql){
        $this->stmt = $this->pdo->prepare($sql);
    }

    public function execute(){
        $this->stmt->execute(); 
    }

    public function last_insert_id(){
        return $this->pdo->lastInsertId();
    }

    public function get(){
        return $this->result = $this->stmt->fetch(PDO::FETCH_ASSOC); 
    }

    public function getAll(){
        return $this->result = $this->stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

    public function bind($param , $value , $type = null){
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = pdo::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = pdo::PARAM_BOOL;
                    break;    
                case is_null($value):
                    $type = pdo::PARAM_NULL;
                    break;
                
                default:
                $type = pdo::PARAM_STR;
                break;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function rowcount(){
        return $this->rowsNum = $this->stmt->rowCount();
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

    public function logout(){
        if (isset($_POST['logout'])) {
            session_destroy();
            header("Location: http://localhost/jomoaa/");
            exit();
        }
    }

    public function getBlogs(){
        $sql = "SELECT ID_BLOG, ID_USER ,ID_ADMIN ,TITRE ,CATEGORY 	,CONTENT ,BLOG_DATE ,ETAT FROM blog";
        $this->query($sql);
        $this->execute();
        $blogs = $this->getAll();
        return $blogs;
       
    }

    public function findUser($id){
        $sql = "select * from user where ID_USER = :id";
        $this->query($sql);
        $this->bind(":id" , $id);
        $this->execute();
        $result = $this->get();
        return $result;
    }

    public function getMignature($blog){

        $text = explode('<p', $blog);
   
           $mignature = "";
           for ($i=1; $i < count($text); $i++) { 
               $mignature .= " " . explode('>',strip_tags(explode('</p>', $text[$i])[0]))[1];
           }
           return substr(strip_tags($mignature),0,900);
    }

    public function timer($postdate){
        
        $startdate = date('Y-m-d H:i:s'); 
        

        $diff=strtotime($startdate)-strtotime($postdate); 

        // immediately convert to days 
        $temp=$diff/86400; // 60 sec/min*60 min/hr*24 hr/day=86400 sec/day 

        $days=floor($temp);  $temp=24*($temp-$days); 
        $hours=floor($temp);  $temp=60*($temp-$hours); 
        $minutes=floor($temp);  $temp=60*($temp-$minutes); 
        $seconds=floor($temp);  

        if ($days > 0) {
            return " منذ " . $days . " أيام ";
        }
        elseif ($hours > 0 ) {
            return " منذ " . $hours . " ساعات ";
        }
        elseif ($minutes > 0) {
            return " منذ " . $minutes . " دقائق";
        }
        else {
            return "الآن";
        }
        
    }
    
}
?>