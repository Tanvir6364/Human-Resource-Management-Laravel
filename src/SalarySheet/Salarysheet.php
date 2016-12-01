<?php
namespace App\SalarySheet;
use App\Message\Message;
use App\Utility\Utility;
use App\DB\Database as DB;

use PDO;
use PDOException;


class SalarySheet extends DB{

    public $id;
    public $title;
    public $amount;


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
        if (array_key_exists('amount', $data)) {

            $this->amount = $data['amount'];
        }
    }
    public function index(){

        $STH = $this->connection->query('SELECT * from salary_sheet');
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $arrAllData  = $STH->fetchAll();
        return $arrAllData;
    }
    //for adding item from create.php
    public function store(){
        $arr = array($this->title, $this->amount);

        $sql="INSERT INTO `salary_sheet` (`title`, `amount`) VALUES (?,?);";
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