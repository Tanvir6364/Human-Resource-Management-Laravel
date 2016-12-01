<?php

include_once("../../vendor/autoload.php");
use App\SalarySheet\SalarySheet;

$OffDays = new SalarySheet();
$OffDays->setData($_GET);

//var_dump($SalarySheet);die();
$OffDays->delete();