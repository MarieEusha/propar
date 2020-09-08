<?php
require_once '../MODELE/management.class.php';
session_start();

$id_task = (int) $_GET['taskId'];
$selectInfo = Management::selectByIdTask($id_task);

?>
<?php
include(__DIR__.'/components/header.php')
?>

    <div  style=" display: none; width: 300px; margin-left: 47rem ;position: absolute; z-index: 20" class="alert danger-alert">
        <h3 id="errorMsg" style="font-size:20px"> </h3>
    </div>


    <div id="overlay" class="cover blur-in">
            <p>Libellé </p>
            <input type="text" name='labelTask' id="labelTask" value=<?php echo $selectInfo['label'] ?>></input>

            <input type="hidden" name='idTask' id="idTask" value=<?php echo $selectInfo['id_task'] ?>></input>

            <p>Description</p>
            <input type="text" name='description' id="description" value=<?php echo $selectInfo['description'] ?>></input>

            <p>Numéro de l'employé</p>
            <input type="text" name="idEmp" id="idEmp" value=<?php echo $selectInfo['id_employee'] ?>></input>

            <p>Type de tâches</p>
            <input type="radio" id="importante" name="type" value="1" checked>
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

    <script src ="javascript/editTask.js"></script>
<?php
include(__DIR__.'/components/footer.php')
?>

</html>