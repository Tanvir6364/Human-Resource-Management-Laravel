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
    public $designation;


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
        if(array_key_exists('designation',$data)){
            $this->designation = $data['designation'];
        }
    }

    //for adding item from create.php
    public function store(){
        $arr = array($this->dept,$this->designation);

        $sql="INSERT INTO `department` (`dept`,`designation`) VALUES (?,?);";
        $STH = $this->connection->prepare($sql);
        $messageme = $STH->execute($arr);

        //  var_dump($messageme);die();

        if($messageme){
            Message::message("<h1>dfdgdfgdfg<\h1>");
        }
        else{
            Message::message("<h1>5353435<\h1>");
        }

        Utility::redirect('index.php');
    }//end of store
    public function delete(){

        $sql = "DELETE FROM department WHERE id =".$this->id;

        $STH = $this->connection->prepare($sql);

        $result = $STH->execute();

        if($result)
            Message::message("<div  id='message'><h3 align='center'> Success! Data Has Been Deleted Successfully!</h3></div>");
        else
            Message::message("<div id='message'><h3 align='center'> Failed! Data Has Not Been Deleted Successfully!</h3></div>");


        Utility::redirect('index.php');


    }
    public function update(){

        $arr = array($this->dept);

        $sql = "UPDATE `department` SET `dept` = ? WHERE `id` =".$this->id;

        $STH = $this->connection->prepare($sql);

        $result = $STH->execute($arr);



        if($result)
            Message::message("<div  id='message'><h3 align='center'> Success! Data Has Been Updated Successfully!</h3></div>");
        else
            Message::message("<div id='message'><h3 align='center'> Failed! Data Has Not Been Updated Successfully!</h3></div>");

        Utility::redirect('index.php');


    }
    public function view($fetchMode="ASSOC"){
        // $fetchMode = strtoupper($fetchMode);
        $STH = $this->connection->query('SELECT * from department where id='.$this->id);

        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode, "OBJ")>0)
            $STH->setFetchMode(PDO::FETCH_OBJ);
        else
            $STH->setFetchMode(PDO::FETCH_ASSOC);

        $arrOneData  = $STH->fetch();
        return $arrOneData;


    }


}
?>