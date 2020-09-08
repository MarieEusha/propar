<?php

require_once '../MODELE/management.class.php';
require_once '../MODELE/task.class.php';
require_once '../MODELE/employee.class.php';

session_start();

$id_emp = (int)$_POST['idEmp'];




header('Location: ../VIEW/editEmp.php?empId=' . $id_emp);
