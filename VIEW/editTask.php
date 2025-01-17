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

    <div class ="margin-top margin-left">
        <h2>Edition de la tâche</h2>
        <div id="overlay" class="cover blur-in">
  
            <p>Libellé </p>
            <div class="input-group mx-sm-3 mb-2">
                <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='labelTask' id="labelTask" value=<?php echo $selectInfo['label'] ?>></input>

                <input type="hidden" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='idTask' id="idTask" value=<?php echo $selectInfo['id_task'] ?>></input>
            </div>
            <p>Description</p>
            <div class="input-group mx-sm-3 mb-2">
                <input type="text" class="form-control input" aria-label="With textarea"  name='description' id="description" value=<?php echo $selectInfo['description'] ?>></input>
            </div>
            <p>Numéro de l'employé</p>
                <div class="input-group mx-sm-3 mb-2">  
            <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="idEmp" id="idEmp" value=<?php echo $selectInfo['id_employee'] ?>></input>
                </div>

            <p>Type de tâches</p>
            <div class="input-group mx-sm-3 mb-2">
                <div class = "radio">
                    <input type="radio" id="importante" name="type" value="1" checked>
                    <label for="importante">importante</label>
                </div>
                <div  class = "radio">
                    <input type="radio" id="moyenne" name="type" value="2">
                    <label for="moyenne">moyenne</label>
                </div>
                <div  class = "radio">
                    <input type="radio" id="petite" name="type" value="3">
                    <label for="petite">petite</label>
                </div>
            </div>

        
            <div class = "center">
                <button type = "submit" class="btn btn-primary" name = "updateTask" id="updateTask">Modification de tache</button>    
            </div>
        </div>
    
    <div class="row pop-up" style = 'display:none'>
        <div class="box small-6 large-centered" >
        <a href="#" class="close-button">&#10006;</a>
        <h3>Propar</h3>
        <p class="popUp">Votre tâche a bien été modifiée</p> 
        <button type="submit" name= "continue" class="continue" id="continue">Retour à la liste de tâches</button>   
        </div>
    </div>
</div>
    <script src ="javascript/editTask.js"></script>
<?php
include(__DIR__.'/components/footer.php')
?>

</html>