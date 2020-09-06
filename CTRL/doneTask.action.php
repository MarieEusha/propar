<?php 

require_once '../MODELE/management.class.php';
require_once '../MODELE/task.class.php';
require_once '../MODELE/employee.class.php';

session_start();

$id_task = (int)$_POST['idTask'];
$id_employee = (int)$_SESSION['employee']['id'];


if(isset($id_task) && isset($id_employee) && !empty($id_task) && !empty($id_employee)){
    $doneTask = Management::statusDone($id_task,$id_employee);

    header('Location: ../VIEW/taskAccount.php');
}