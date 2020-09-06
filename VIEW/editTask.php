<?php
require_once '../MODELE/management.class.php';
session_start();

$id_task = (int) $_GET['taskId'];
$selectInfo = Management::selectByIdTask($id_task);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css'/>
    <title>Document</title> 
</head>

<body>
    <div id="overlay" class="cover blur-in">
            <p>Libellé </p>
            <input type="text" name='labelTask' id="labelTask" value=<?php echo $selectInfo['label'] ?>></input>
            <p>Description</p>
            <input type="text" name='description' id="description" value=<?php echo $selectInfo['description'] ?>></input>

            <p>Prénom du client</p>
            <input type="text" name='firstname' id="cFirstname" value=<?php echo  $selectInfo['customer_firstname'] ?>></input>

            <p>Nom du client</p>
            <input type="text" name='lastname' id="cLastname" value=<?php echo  $selectInfo['customer_lastname'] ?>></input>

            <p>Mail du client</p>
            <input type="text" name='mail' id="mail" value=<?php echo  $selectInfo['customer_mail'] ?>></input>

            <p>Prénom de l'employé</p>
            <input type="text" name='firstname' id="eFirstname" value=<?php echo  $selectInfo['employee_lastname'] ?>></input>

            <p>Nom de l'employé</p>
            <input type="text" name='lastname' id="eLastname" value=<?php echo  $selectInfo['employee_lastname'] ?>></input>


            <p>Type de tâches</p>
            <input type="radio" id="importante" name="type" value="1">
            <label for="importante">importante</label>

            <input type="radio" id="moyenne" name="type" value="2">
            <label for="moyenne">moyenne</label>

            <input type="radio" id="petite" name="type" value="3">
            <label for="petite">petite</label>



            <button type = "submit" name = "updateTask" id="updateTask">Modification de tache</button>    
    </div>
    <div class="row pop-up" style = 'display:none'>
        <div class="box small-6 large-centered" >
        <a href="#" class="close-button">&#10006;</a>
        <h3>Propar</h3>
        <p class="popUp">Votre tâche a bien été modifiée</p> 
        <button type="submit" name= "continue" class="continue" id="continue">Retour à la liste de tâches</button>   
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

</body>
</html>