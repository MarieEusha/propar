<?php 
include "../MODELE/management.class.php";
include "../MODELE/person.class.php";
include "../MODELE/employee.class.php";



//$customer = Management::searchCustomer("luigi@gmail.com");

//$test = Management::updateTask(2,'test', "test",1,1);

//$test = Management::revenue();

//$test = Management::selectOneEmployee(12);

$test = Management::updateEmployee(7,"test","test","test@gmail.com",2);
 var_dump($test);