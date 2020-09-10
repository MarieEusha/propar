<?php

require_once "../MODELE/management.class.php";
require_once "../MODELE/type.class.php";


$allType = Management::selectType();


echo json_encode($allType);