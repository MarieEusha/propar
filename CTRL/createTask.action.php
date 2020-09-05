<?php

require_once '../MODELE/management.class.php';
require_once '../MODELE/customer.class.php';
require_once '../MODELE/task.class.php';



$label = $_POST['label'];
$description = $_POST['description'];
$type = $_POST['type'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];


//Verifier si les champs sont vides ou null
if(!empty($label)&&!empty($description)&&!empty($type)&&!empty($firstname)&&!empty($lastname)&&!empty($mail) || !isset($label) && !isset($description) && !isset($type) && !isset($firstname)&& !isset($lastname) && !isset($mail)){
    $customer_id = Management::addCustomer($firstname,$lastname,$mail);
    
    $addTask = Management::addTask($label,$description,$type,$customer_id);
    

    echo "enter";
}