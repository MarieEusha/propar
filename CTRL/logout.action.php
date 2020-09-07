<?php 

require_once "../MODELE/management.class.php";
require_once "../MODELE/employee.class.php";
session_start();


unset($_SESSION['employee']);

header("Location: ../VIEW/index.php");