<?php
include('../../vendor/autoload.php');
use App\Department\Department;
use App\Message\Message;
use App\Utility\Utility;
//var_dump($_POST);die();

$obj = new Department();

$obj->setData($_POST);
$obj->update();