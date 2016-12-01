<?php
namespace App\OffDays;
use App\Message\Message;
use App\Utility\Utility;
use App\DB\Database as DB;

use PDO;
use PDOException;


class OffDays extends DB{

    public $id;
    public $date;
    public $details;

    public function __construct(){
        parent::__construct();
    }


    public function setData($data){
        if (array_key_exists('id', $data)) {

            $this->id = $data['id'];
        }
        if (array_key_exists('date', $data)) {

            $this->date = $data['date'];
        }
        if (array_key_exists('details', $data)) {

            $this->details = $data['details'];
        }
    }

    //for adding item from create.php
    public function store(){
        $arr = array($this->date,$this->details);

        $sql="INSERT INTO `off_days` (`date`,`details`) VALUES (?,?);";
        $STH = $this->connection->prepare($sql);
        $messageme = $STH->execute($arr);

        //  var_dump($messageme);die();

        if($messageme){
            Message::message("<h1>dfdgdfgdfg<\h1>");
        }
        else{
            Message::message("<h1>5353435<\h1>");
        }

        Utility::redirect('../../views/offdays/index.php');
    }//end of store


    public function index(){

        $STH = $this->connection->query('SELECT * from  off_days');
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $arrAllData  = $STH->fetchAll();
        return $arrAllData;
    }
    public function delete(){

        $sql = "DELETE FROM off_days WHERE id =".$this->id;

        $STH = $this->connection->prepare($sql);

        $result = $STH->execute();

        if($result)
            Message::message("<div  id='message'><h3 align='center'> Success! Data Has Been Deleted Successfully!</h3></div>");
        else
            Message::message("<div id='message'><h3 align='center'> Failed! Data Has Not Been Deleted Successfully!</h3></div>");


        Utility::redirect('index.php');


    }

}
?>