<?php
namespace yahya\Database;
use PDO;


class Database{

    private $host = HOST;
    private $username = USER_NAME;
    private $password = PASSWORD;
    private $dbname = DATABASE_NAME;

    const NO_MATCHE_VALUE = "no matches value";
    protected $rowsNum;
    protected $result = [];

    private $pdo;
    private $stmt;

    public function __construct(){
        $dsn = 'mysql:host=' . $this->host . '; dbname=' . $this->dbname;
        try {
            $this->pdo = new PDO($dsn, $this->username , $this->password);
        } catch (PDOException $e) {
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

    public function get(){
        return $this->result = $this->stmt->fetch(PDO::FETCH_ASSOC); 
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

    public function findOne($tableName, $columnName, $id, $value){
        $sql = "SELECT * FROM $tableName WHERE $columnName = $id";

        $this->query($sql);

        $this->bind($id, $value);
        $this->execute();
        $this->rowcount();

        if ($this->rowsNum == 0) {
            return $this->result = self::NO_MATCHE_VALUE;
        }
        else{
            $this->get();
        }
    }
}
?>