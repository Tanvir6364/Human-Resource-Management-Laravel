<?php

include_once("../../vendor/autoload.php");
use App\Department\Department;

$Department = new Department();
$Department->setData($_GET);

//var_dump($SalarySheet);die();
$Department->delete();