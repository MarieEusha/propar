<?php

require_once '../MODELE/management.class.php';
require_once '../MODELE/employee.class.php';
require_once '../MODELE/task.class.php';

session_start();

$id_employee = $_SESSION['employee']['id'];
$status = $_SESSION['employee']['status'];

$createdTask = Management::displayCreatedTask();
$inProgressByUser = Management::searchTaskInProgressByEmployee($id_employee);
$doneByUser = Management::searchTaskDoneByEmployee($id_employee);
$count = Management::searchTaskInProgressByEmployeeCount($id_employee);

$allTask = [$createdTask,$inProgressByUser,$doneByUser];
if(isset($status) && isset($allTask)  && !empty($status) && !empty($allTask) ){
    $data = [
        'status' => $status,
        'allTask'   => $allTask,
        'count'=> $count
    ];

    echo json_encode($data);
}else{
    echo "error";
}