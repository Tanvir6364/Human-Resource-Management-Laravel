<?php
namespace App\Department;
use App\Message\Message;
use App\Utility\Utility;
use App\DB\Database as DB;

use PDO;
use PDOException;


class Department extends DB{

    public $id;
    public $dept;


    public function __construct(){
        parent::__construct();
    }


    public function setData($data){
        if (array_key_exists('id', $data)) {

            $this->id = $data['id'];
        }
        if (array_key_exists('dept', $data)) {

            $this->dept = $data['dept'];
        }
    }

    //for adding item from create.php
    public function store(){
        $arr = array($this->dept);

        $sql="INSERT INTO `department` (`dept`) VALUES (?);";
        $STH = $this->connection->prepare($sql);
        $messageme = $STH->execute($arr);

        //  var_dump($messageme);die();

        if($messageme){
            Message::message("<h1>dfdgdfgdfg<\h1>");
        }
        else{
            Message::message("<h1>5353435<\h1>");
        }

        //Utility::redirect('../../../views/employee/add.php');
    }//end of store



}
?>