<?php 
require_once "../MODELE/management.class.php";
require_once "../MODELE/employee.class.php";

session_start();

$id_emp = $_POST['idEmp'];

if(isset($id_emp) && !empty($id_emp)){
    $deleteEmp = Management::deleteEmployee($id_emp);
}
