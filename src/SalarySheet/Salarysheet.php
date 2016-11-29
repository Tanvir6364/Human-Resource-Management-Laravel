<?php
namespace  App\SalarySheet;
require_once('../../vendor/autoload.php');
use App\Message\Message;
use App\Utility\Utility;
use App\DB\Database as DB;

use PDO;
use PDOException;


class SalarySheet extends DB{

    public $id;
    public $title;
    public $ammount;


    public function __construct(){
        parent::__construct();
    }


    public function setData($data){
        if (array_key_exists('id', $data)) {

            $this->id = $data['id'];
        }
        if (array_key_exists('title', $data)) {

            $this->title = $data['title'];
        }
        if (array_key_exists('ammount', $data)) {

            $this->ammount = $data['ammount'];
        }
    }

    public function store(){
        $arr = array($this->title, $this->ammount);
        $sql = "insert into salary_sheet(title, ammount) VALUES (?,?)";
        $STH = $this->connection->prepare($sql);
        $STH->execute($arr);

    }



}
?>