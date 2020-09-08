<?php
session_start();
require_once '../MODELE/management.class.php';
require_once '../MODELE/task.class.php';
require_once '../MODELE/employee.class.php';

$id_emp = $_POST['id_employee'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$mail = $_POST['mail'];
$id_status = $_POST['status'];


if(isset($id_emp) && isset($lastname) && isset($firstname) && isset($mail) && isset($id_status) && !empty($id_emp) && !empty($lastname) && !empty($firstname) && !empty($mail) && !empty($id_status)){
    $updateEmp = Management::updateEmployee($id_emp,$firstname,$lastname,$mail,$id_status);
//header("Location:../VIEW/employeeList.php");
    echo "enter";
}else{
    echo "error";
}