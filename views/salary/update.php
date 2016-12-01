<?php
include('../../vendor/autoload.php');
use App\Employee\Employee;
use App\Message\Message;
use App\Utility\Utility;
//var_dump($_POST);die();

$obj = new Employee();

$obj->setData($_POST);
$obj->update();