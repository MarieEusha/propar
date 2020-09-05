<?php 
include "../MODELE/management.class.php";
include "../MODELE/person.class.php";
include "../MODELE/employee.class.php";



//$customer = Management::searchCustomer("luigi@gmail.com");

$test = Management::searchTaskInProgressByEmployee(1);


var_dump($test);