<?php 
include "../MODELE/management.class.php";
include "../MODELE/person.class.php";
include "../MODELE/employee.class.php";



//$customer = Management::searchCustomer("luigi@gmail.com");

$test = Management::selectByIdTask(6);


 var_dump($test);