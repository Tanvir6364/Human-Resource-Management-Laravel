<?php


//var_dump($_)

include_once("../../vendor/autoload.php");
use App\Employee\Employee;

if((isset($_FILES['image'])&& !empty($_FILES['image']['name']))){
    //echo $_FILES['image']['name'];
    $image_name= time().$_FILES['image']['name'];
    $temporary_location= $_FILES['image']['tmp_name'];
    move_uploaded_file( $temporary_location,'../../resource/images/'.$image_name);
    $_POST['image']=$image_name;
}

$Employee = new Employee();
$Employee->setData($_POST);

//var_dump($Employee);die();
$Employee->store();