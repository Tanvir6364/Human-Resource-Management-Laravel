<?php
namespace App\Employee;
use App\Message\Message;
use App\Utility\Utility;
use App\DB\Database as DB;

use PDO;
use PDOException;

class Employee extends DB
{
    public $id;
    public $first_name;
    public $last_name;
    public $birthday;
    public $gender;
    public $marital_status;
    public $nationality;
    public $nid;
    public $profile_picture;
    public $phone_number;
    public $email;
    public $address1;
    public $address2;
    public $country;
    public $city;
    public $post_code;
    public $employee_id;
    public $join_date;
    public $role;
    public $salary;
    public $dept;
    public $fb;
    public $twitter;
    public $linkedin;
    public $googleplus;

    public $status;
    public $salary_grade;
    public $salary_ammount;
    public $password;
    public $id_token;

    public function __construct()
    {

        parent::__construct();

    }

    public function setData($data)
    {

        if (array_key_exists('id', $data)) {

            $this->id = $data['id'];
        }

        if (array_key_exists('first_name', $data)) {

            $this->first_name = $data['first_name'];
        }

        if (array_key_exists('last_name', $data)) {

            $this->last_name = $data['last_name'];
        }
        if (array_key_exists('birthday', $data)) {

            $this->birthday = $data['birthday'];
        }

        if (array_key_exists('gender', $data)) {

            $this->gender = $data['gender'];
        }

        if (array_key_exists('marital_status', $data)) {

            $this->marital_status = $data['marital_status'];
        }
        if (array_key_exists('nationality', $data)) {

            $this->nationality = $data['nationality'];
        }
        if (array_key_exists('nid', $data)) {

            $this->nid = $data['nid'];
        }

        if (array_key_exists('image', $data)) {

            $this->profile_picture = $data['image'];
        }

        if (array_key_exists('phone_number', $data)) {

            $this->phone_number = $data['phone_number'];
        }

        if (array_key_exists('email', $data)) {

            $this->email = $data['email'];

        }
        if (array_key_exists('address1', $data)) {

            $this->address1 = $data['address1'];

        }
        if (array_key_exists('address2', $data)) {

                    $this->address2 = $data['address2'];
        }

        if (array_key_exists('country', $data)) {

            $this->country = $data['country'];

        }
        if (array_key_exists('city', $data)) {

            $this->city = $data['city'];

        }
        if (array_key_exists('post_code', $data)) {

            $this->post_code = $data['post_code'];
        }

        if (array_key_exists('employee_id', $data)) {

            $this->employee_id = $data['employee_id'];
        }
        if (array_key_exists('join_date', $data)) {

            $this->join_date = $data['join_date'];

        }
        if (array_key_exists('role', $data)) {

            $this->role = $data['role'];

        }
        if (array_key_exists('salary', $data)) {

        $this->salary = $data['salary'];

    }
        if (array_key_exists('dept', $data)) {

            $this->dept = $data['dept'];

        }
        if (array_key_exists('fb', $data)) {

            $this->fb = $data['fb'];

        }
        if (array_key_exists('twitter', $data)) {

            $this->twitter = $data['twitter'];
        }
        if (array_key_exists('linkedin', $data)) {

            $this->linkedin = $data['linkedin'];

        }
        if (array_key_exists('googleplus', $data)) {

            $this->googleplus = $data['googleplus'];

        }

        if (array_key_exists('password', $data)) {

            $this->password = md5($data['password']);

        }



    }


    //for adding item from create.php
    public function store(){
        $arr = array($this->first_name, $this->last_name, $this->birthday, $this->gender, $this->marital_status, $this->nationality,$this->nid, $this->profile_picture,$this->phone_number,$this->email,$this->address1,$this->address2,$this->country,$this->city,$this->post_code,$this->employee_id,$this->join_date,$this->role,$this->salary,$this->dept,$this->fb,$this->twitter,$this->linkedin,$this->googleplus,$this->password);


       /* $sql = "insert into employee(first_name, last_name, birthday, gender, marital_status,nationality,nid,phone_number,email,address1,address2,country,post_code,employee_id,join_date,role,dept,salary,fb,twitter,linkedin,googleplus) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";*/

        $sql="INSERT INTO `users` (`first_name`, `last_name`, `birthday`, `gender`, `marital_status`, `nationality`, `nid`, `profile_picture`, `phone_number`, `email`, `address1`, `address2`, `country`, `city`, `post_code`, `employee_id`, `join_date`, `role`, `salary`, `dept`, `fb`, `twitter`, `linkedin`, `googleplus`, `password`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

        $STH = $this->connection->prepare($sql);
        $messageme = $STH->execute($arr);

        if($messageme){
            Message::message("<h1>dfdgdfgdfg<\h1>");
        }
        else{
            Message::message("<h1>5353435<\h1>");
        }

        Utility::redirect('../../views/employee/index.php');


        $arr = array($this->employee_id);

        $sql="INSERT INTO `user` (`employee_id`) VALUES (?);";
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


    public function index($fetchMode="ASSOC"){

        $STH = $this->connection->query('SELECT * from users where is_delete=1');


        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode, "OBJ")>0)   $STH->setFetchMode(PDO::FETCH_OBJ);
        else               $STH->setFetchMode(PDO::FETCH_ASSOC);

        $arrAllData  = $STH->fetchAll();
        return $arrAllData;

    }


    public function salarysheet($fetchMode="ASSOC"){

        $STH = $this->connection->query('SELECT * from salary_sheet');


        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode, "OBJ")>0)   $STH->setFetchMode(PDO::FETCH_OBJ);
        else               $STH->setFetchMode(PDO::FETCH_ASSOC);

        $arrAllData  = $STH->fetchAll();
        return $arrAllData;

    }

    public function department($fetchMode="ASSOC"){

        $STH = $this->connection->query('SELECT * from department');


        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode, "OBJ")>0)   $STH->setFetchMode(PDO::FETCH_OBJ);
        else               $STH->setFetchMode(PDO::FETCH_ASSOC);

        $arrAllData  = $STH->fetchAll();
        return $arrAllData;

    }

    public function view($fetchMode="ASSOC"){
        // $fetchMode = strtoupper($fetchMode);
        $STH = $this->connection->query('SELECT * from users where id='.$this->id);

        $fetchMode = strtoupper($fetchMode);
        if(substr_count($fetchMode, "OBJ")>0)
            $STH->setFetchMode(PDO::FETCH_OBJ);
        else
            $STH->setFetchMode(PDO::FETCH_ASSOC);

        $arrOneData  = $STH->fetch();
        return $arrOneData;


    }

    public function update(){

    $arr = array($this->first_name, $this->last_name, $this->birthday, $this->gender, $this->marital_status, $this->nationality,$this->nid, $this->profile_picture,$this->phone_number,$this->email,$this->address1,$this->address2,$this->country,$this->city,$this->post_code,$this->employee_id,$this->join_date,$this->role,$this->salary,$this->dept,$this->fb,$this->twitter,$this->linkedin,$this->googleplus);

        $sql = "UPDATE `users` SET `first_name` = ?, `last_name` = ?, `birthday` = ?, `gender` = ?, `marital_status` = ?, `nationality` = ?, `nid` = ?, `profile_picture` = ?, `phone_number` = ?, `email` = ?, `address1` = ?, `address2` = ?, `country` = ?, `city` = ?, `post_code` = ?, `employee_id` = ?, `join_date` = ?, `role` = ?, `salary` = ?, `dept` = ?, `fb` = ?, `twitter` = ?, `linkedin` = ?, `googleplus` = ? WHERE `employee`.`id` =".$this->id;

        $STH = $this->connection->prepare($sql);

        $result = $STH->execute($arr);



        if($result)
            Message::message("<div  id='message'><h3 align='center'> Success! Data Has Been Updated Successfully!</h3></div>");
        else
            Message::message("<div id='message'><h3 align='center'> Failed! Data Has Not Been Updated Successfully!</h3></div>");

        Utility::redirect('index.php');


    }
    public function delete(){

        $sql = "DELETE FROM users WHERE id =".$this->id;

        $STH = $this->connection->prepare($sql);

        $result = $STH->execute();

        if($result)
            Message::message("<div  id='message'><h3 align='center'> Success! Data Has Been Deleted Successfully!</h3></div>");
        else
            Message::message("<div id='message'><h3 align='center'> Failed! Data Has Not Been Deleted Successfully!</h3></div>");


        Utility::redirect('index.php');


    }

    public function trash(){
        $query="UPDATE users SET is_delete=:true where id=:id";
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

        $STH = $this->connection->query('SELECT * from users WHERE is_delete=0');


        if($Mode=="OBJ")   $STH->setFetchMode(PDO::FETCH_OBJ);
        else               $STH->setFetchMode(PDO::FETCH_ASSOC);

        $arrAllData  = $STH->fetchAll();

        return $arrAllData;
    }

    public function restore(){
        $query="UPDATE users SET is_delete=:true where id=:id";
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


        Utility::redirect('trashed.php');
    }


    public function countEmployee(){

        $sql="SELECT count(`id`) as count FROM `users` ";
      $STH=$this->connection->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);
      

        $arrOneData  = $STH->fetch();
       // var_dump($arrOneData);die();
        return $arrOneData;
    }

    public function countDept(){

        $sql="SELECT count(`id`) as count FROM `department` ";
        $STH=$this->connection->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);


        $arrOneData  = $STH->fetch();
        // var_dump($arrOneData);die();
        return $arrOneData;
    }

    public function countSlaryGrade(){

        $sql="SELECT count(`id`) as count FROM `salary_sheet` ";
        $STH=$this->connection->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);


        $arrOneData  = $STH->fetch();
        // var_dump($arrOneData);die();
        return $arrOneData;
    }

    public function countOffDays(){

        $sql="SELECT count(`id`) as count FROM `off_days` ";
        $STH=$this->connection->query($sql);
        $STH->setFetchMode(PDO::FETCH_OBJ);


        $arrOneData  = $STH->fetch();
        // var_dump($arrOneData);die();
        return $arrOneData;
    }



}
