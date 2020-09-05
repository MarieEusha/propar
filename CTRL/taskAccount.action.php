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

$allTask = [$createdTask,$inProgressByUser,$doneByUser];

$data = [
    'status' => $status,
    'allTask'   => $allTask
];

echo json_encode($data);