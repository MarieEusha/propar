<?php

require_once '../MODELE/management.class.php';
require_once '../MODELE/task.class.php';


$id_task = $_POST['idTask'];

$delete = Management:: deleteTask($id_task);


header('Location: ../VIEW/taskAccount.php');
exit;