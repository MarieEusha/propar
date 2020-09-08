<?php
session_start();
require_once '../MODELE/management.class.php';
require_once '../MODELE/task.class.php';
require_once '../MODELE/employee.class.php';

$label = $_POST['label'];
$id_task = $_POST['idTask'];
$description = $_POST['description'];
$id_employee = $_POST['id_employee'];
$id_type = $_POST['type'];


if(isset($id_task) && isset($label) && isset($description) && isset($id_type) && isset($id_employee) && !empty($id_task) && !empty($label) && !empty($description) && !empty($id_type) && !empty($id_employee)){
    $updateTask = Management::updateTask($id_task,$label,$description,$id_type,$id_employee);

    echo "enter";


    //header("Location:../VIEW/taskAccount.php");
}else{
    echo "error";
}