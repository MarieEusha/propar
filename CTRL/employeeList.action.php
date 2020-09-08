<?php 
require_once '../MODELE/management.class.php';
require_once '../MODELE/employee.class.php';

session_start();

$status = $_SESSION['employee']['status'];
$allEmployees = Management::selectAllEmployees();

if (isset($status) && isset($allEmployees) && !empty($status) && !empty($allEmployees)){
$data = [
    'status' => $status,
    'allEmployees' => $allEmployees
];


echo json_encode($data);
}else if(empty($allEmployees) || !isset($allEmployees)){
    echo "noEmp";
}else if (empty($status) || !isset($status)){
    echo "noStatus";
}