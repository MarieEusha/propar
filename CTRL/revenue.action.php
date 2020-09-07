<?php 

require_once "../MODELE/management.class.php";
require_once "../MODELE/task.class.php";

session_start();

$revenue = Management::revenue();

$data = [
    'status' => $_SESSION['employee']['status'],
    'revenue' => $revenue
];

if (isset($revenue) && !empty($revenue)){
    echo json_encode($data);
}else {
    echo "false";
}