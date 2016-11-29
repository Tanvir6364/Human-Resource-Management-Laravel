<?php
namespace App\DB;
use PDO;
use PDOException;

class Database{
    public $connection=null;
    public $contest;
    public $username="root";
    public $password="";

    public function __construct(){
        try {

            //$this->conn = new PDO("mysql:host=localhost;dbname=atomicprojectb37", $this->username, $this->password);
            //$this->connection = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->username, $this->password);
            $this->connection=new PDO('mysql:host=localhost;dbname=final_project', 'admin', '123456');
            //var_dump($this->connection);die();

            //echo "success";
        }
        catch (PDOException $e) {
            //echo "not success";
            echo $e->getMessage();
        }
    }
}

