<?php 
require_once '../MODELE/management.class.php';
require_once '../MODELE/employee.class.php';

session_start();

$status = $_SESSION['employee']['status'];
$allEmployees = Management::selectAllEmployees();


$data = [
    'status' => $status,
    'allEmployees' => $allEmployees
];


echo json_encode($data);