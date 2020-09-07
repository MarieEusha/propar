<?php 
include "../MODELE/management.class.php";
include "../MODELE/person.class.php";
include "../MODELE/employee.class.php";



//$customer = Management::searchCustomer("luigi@gmail.com");

//$test = Management::updateTask(1,'test', "test",1,"Mario","Bros",'mario@gmail.com',"bibu","bobo");

$test = Management::revenue();


 var_dump($test['revenue']);