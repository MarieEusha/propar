<?php

require_once '../MODELE/management.class.php';
require_once '../MODELE/task.class.php';
require_once '../MODELE/employee.class.php';

session_start();

$id_task = (int)$_POST['idTask'];
$id_employee = (int)$_SESSION['employee']['id'];
$status = (int)$_SESSION['employee']['status'];
$count = Management::searchTaskInProgressByEmployeeCount($id_employee);


if(isset($id_task) && isset($id_employee) && !empty($id_task) && !empty($id_employee)){
    if($count < 5 && $status == 1){
    $swapToInProgress = Management::statusInProgress($id_task,$id_employee);

    header('Location: ../VIEW/taskAccount.php');
    }
}

