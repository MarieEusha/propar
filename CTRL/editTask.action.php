<?php

require_once '../MODELE/management.class.php';
require_once '../MODELE/task.class.php';
require_once '../MODELE/employee.class.php';

$id_task = $_GET['taskId'];
$label = $_POST['labelTask'];
$description = $_POST['description'];
$id_type = $_POST['type'];
$cFirstname = $_POST['cFirstname'];
$cLastname = $_POST['cLastname'];
$mail = $_POST['mail'];
$eFirstname = $_POST['eFirstname'];
$eLastname = $_POST['eLastname'];



$updateTask = Management::updateTask($id_task,$label,$description,$id_type,$cFirstname,$cLastname,$mail,$eFirstname,$eLastname);