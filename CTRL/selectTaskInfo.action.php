<?php

require_once '../MODELE/management.class.php';
require_once '../MODELE/task.class.php';
require_once '../MODELE/employee.class.php';

session_start();

$id_task = (int)$_POST['idTask'];

// $selectInfo = Management::selectByIdTask($id_task);

header('Location: ../VIEW/editTask.php?taskId=' . $id_task);



