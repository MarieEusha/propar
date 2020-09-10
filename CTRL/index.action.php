<?php 

require_once '../MODELE/management.class.php';
require_once '../MODELE/task.class.php';

$createdTask = Management::displayCreatedTask();
$taskInProgress = Management::displayInProgress();
$taskDone = Management::displayTaskDone();


$allTask = [$createdTask,$taskInProgress,$taskDone];


echo json_encode($allTask);
