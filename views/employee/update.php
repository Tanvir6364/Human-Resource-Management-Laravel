<?php
include('../../vendor/autoload.php');
use App\Employee\Employee;
use App\Message\Message;
use App\Utility\Utility;
//var_dump($_POST);die();
$obj = new Employee();
if((isset($_FILES['image'])&& !empty($_FILES['image']['name']))){
    //echo $_FILES['image']['name'];
    $image_name= time().$_FILES['image']['name'];
    $temporary_location= $_FILES['image']['tmp_name'];
    move_uploaded_file( $temporary_location,'../../resource/images/'.$image_name);
    $_POST['image']=$image_name;
}
else $_POST['image'] = $_POST['existingPic'];
$obj->setData($_POST);
$obj->update();