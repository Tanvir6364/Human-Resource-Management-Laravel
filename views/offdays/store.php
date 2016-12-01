<?php

include_once("../../vendor/autoload.php");
use App\OffDays\OffDays;

$OffDays = new OffDays();
$OffDays->setData($_POST);

//var_dump($SalarySheet);die();
$OffDays->store();