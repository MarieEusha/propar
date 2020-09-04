<?php

require_once '../MODELE/management.class.php';
require_once '../MODELE/employee.class.php';


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$login = $_POST['login'];
$password = $_POST['password'];
$mail = $_POST['mail'];
$status = $_POST['status'];


$dbLogin = Management::searchEmployee($login);


if(!empty($firstname)&&!empty($lastname)&&!empty($login)&&!empty($password) &&!empty($status)|| !isset($firstname) && !isset($lastname) && !isset($login) && !isset($password) && !isset($status) ){
    if(!$dbLogin){
        $addEmployee = Management::addEmployee($firstname,$lastname,$login,$password,$mail,$status);

        echo "enter";

    }else{
        echo "false";

    }
}