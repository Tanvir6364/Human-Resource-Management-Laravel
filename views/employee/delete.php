<?php
include('../../vendor/autoload.php');
use App\Employee\Employee;
use App\Message\Message;
use App\Utility\Utility;

$obj = new Employee();
$obj->setData($_GET);
$obj->delete();