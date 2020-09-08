<?php 
session_start();
require_once "../MODELE/management.class.php";
require_once "../MODELE/type.class.php";


$label = $_POST['label'];
$price = $_POST['price'];
$status = $_SESSION['employee']['status'];


if($status == 1){
    if(isset($label) && isset($price) && !empty($label) && !empty($price)){
        $addType = Management::addType($label,$price);

        echo "enter";
    }else{
        echo "error";
    }
}
