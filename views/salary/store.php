<?php

include_once("../../vendor/autoload.php");
use App\SalarySheet\SalarySheet;

$SalarySheet = new SalarySheet();
$SalarySheet->setData($_POST);

//var_dump($SalarySheet);die();
$SalarySheet->store();