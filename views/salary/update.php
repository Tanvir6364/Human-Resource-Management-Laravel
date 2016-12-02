<?php
include('../../vendor/autoload.php');
use App\SalarySheet\SalarySheet;
use App\Message\Message;
use App\Utility\Utility;
//var_dump($_POST);die();

$obj = new SalarySheet();

$obj->setData($_POST);
$obj->update();