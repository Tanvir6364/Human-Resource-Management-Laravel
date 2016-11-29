<?php
/**
 * Created by PhpStorm.
 * User: tanim
 * Date: 11/27/2016
 * Time: 12:51 PM
 */

namespace App;
use App\db\Database as DB;


class Admin extends  DB
{
    public $id;
    public $full_name;
    public $email;
    public $password;
    public $profile_picture;


    public function __construct()
    {

        parent::__construct();

    }

    public function setData($data){
        if(array_key_exists('id',$data)) {
            $this->id= $data['id'];
        }

        if (array_key_exists('full_name', $data)) {
            $this->full_name = $data['full_name'];

        }if (array_key_exists('email', $data)) {
            $this->email = $data['email'];

        }if (array_key_exists('password', $data)) {
            $this->password = $data['password'];

        }if (array_key_exists('profile_picture', $data)) {
            $this->profile_picture = $data['profile_picture'];
        }

    }


    public function store()
    {
        $DBH = $this->connection;
        $data = array('full_name' => $this->full_name,'email'=> $this->email,'password'=>$this->password,'profile_picture'=>$this->Profile_picture);
        $STH = $DBH->prepare("insert into `admin` (`full_name`,`email`,`password`,`profile_picture`) VALUES (:full_name,:email,:password,:profile_picture)");

        $STH->execute($data);

        Message::message("<div id='msg'></div><h3 align='center'>[ gender: $this->gender ] <br> Data Has Been Inserted Successfully!</h3></div>");


        Utility::redirect('create.php');

    }
    public function index($fetchMode="ASSOC"){

        $STH = $this->connection->query('SELECT * from admin where is_delete=1');


        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode, "OBJ")>0)   $STH->setFetchMode(PDO::FETCH_OBJ);
        else               $STH->setFetchMode(PDO::FETCH_ASSOC);

        $arrAllData  = $STH->fetchAll();
        return $arrAllData;

    }

    public function view($fetchMode="ASSOC"){
        // $fetchMode = strtoupper($fetchMode);
        $STH = $this->connection->query('SELECT * from admin where id='.$this->id);

        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode, "OBJ")>0)   $STH->setFetchMode(PDO::FETCH_OBJ);
        else               $STH->setFetchMode(PDO::FETCH_ASSOC);

        $arrOneData  = $STH->fetch();
        return $arrOneData;


    }

    public function update(){
        /*echo $this->gender ;
        echo $this->id;
        die();*/
        //$arrData  = array($this->gender,$this->id);

        $sql = "UPDATE `admin` SET `full_name`=?,`email`=?,`password`=?,`profile_picture`=?  WHERE `id`=?";
        // echo $sql;die();

        $STH = $this->connection->prepare($sql);
        $STH->bindParam(1,$this->full_name);
        $STH->bindParam(2,$this->email);
        $STH->bindParam(3,$this->password);
        $STH->bindParam(4,$this->profile_picture);



        $result = $STH->execute();



        if($result)
            Message::message("<div  id='message'><h3 align='center'> Success! Data Has Been Updated Successfully!</h3></div>");
        else
            Message::message("<div id='message'><h3 align='center'> Failed! Data Has Not Been Updated Successfully!</h3></div>");

        Utility::redirect('index.php');


    }
    public function delete(){

        $sql = "DELETE FROM admin WHERE id =".$this->id;

        $STH = $this->connection->prepare($sql);

        $result = $STH->execute();

        if($result)
            Message::message("<div  id='message'><h3 align='center'> Success! Data Has Been Deleted Successfully!</h3></div>");
        else
            Message::message("<div id='message'><h3 align='center'> Failed! Data Has Not Been Deleted Successfully!</h3></div>");


        Utility::redirect('index.php');


    }

    public function trash(){
        $query="UPDATE admin SET is_delete=:true where id=:id";
        $STH = $this->connection->prepare($query);

        $result=$STH->execute(
            array(
                ':true'=>'0',
                ':id'=>$this->id,
            )
        );
        if($result)
            Message::message("<div  id='message'><h3 align='center'> Success! Data Has Been Deleted Successfully!</h3></div>");
        else
            Message::message("<div id='message'><h3 align='center'> Failed! Data Has Not Been Deleted Successfully!</h3></div>");


        Utility::redirect('index.php');
    }

    public function trash_list($Mode="ASSOC"){
        $Mode=strtoupper($Mode);

        $STH = $this->connection->query('SELECT * from admin WHERE is_delete=1');


        if($Mode=="OBJ")   $STH->setFetchMode(PDO::FETCH_OBJ);
        else               $STH->setFetchMode(PDO::FETCH_ASSOC);

        $arrAllData  = $STH->fetchAll();

        return $arrAllData;
    }

    public function restore(){
        $query="UPDATE admin SET is_delete=:true where id=:id";
        $STH = $this->connection->prepare($query);

        $result=$STH->execute(
            array(
                ':true'=>'1',
                ':id'=>$this->id,
            )
        );
        if($result)
            Message::message("<div  id='message'><h3 align='center'> Success! Data Has Been Restore Successfully!</h3></div>");
        else
            Message::message("<div id='message'><h3 align='center'> Failed! Data Has Not Been Restore Successfully!</h3></div>");


        Utility::redirect('TrashList.php');
    }

}