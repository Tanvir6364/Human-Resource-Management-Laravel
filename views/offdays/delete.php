<?php

include_once("../../vendor/autoload.php");
use App\OffDays\OffDays;

$OffDays = new OffDays();
$OffDays->setData($_GET);

//var_dump($SalarySheet);die();
$OffDays->delete();