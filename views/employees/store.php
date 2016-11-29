<?php

include_once("../../vendor/autoload.php");
use App\Employee\Employee;

$Employee = new Employee();
$Employee->setData($_POST);
//echo $bookObject->book_title;



//var_dump($data);
$Employee->store();