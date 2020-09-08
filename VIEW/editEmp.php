<?php
require_once '../MODELE/management.class.php';
session_start();

$id_emp = (int) $_GET['empId'];
$selectInfo = Management::selectOneEmployee($id_emp);
?>

<?php
include(__DIR__.'/components/header.php');
?>
    <div  style=" display: none; width: 300px; margin-left: 47rem ;position: absolute; z-index: 20" class="alert danger-alert">
        <h3 id="errorMsg" style="font-size:20px"> </h3>
    </div>
    
            <input type ="hidden" name ="idEmp" id="idEmp" value=<?php echo $id_emp ?>></input>
            <p>Nom </p>
            <input type="text" name='nameEmp' id="nameEmp" value=<?php echo $selectInfo['lastname'] ?>></input>

            <p>Prénom</p>
            <input type="text" name='firstname' id="firstname" value=<?php echo $selectInfo['firstname'] ?>></input>

            <p>Mail</p>
            <input type="text" name='mail' id="mail" value=<?php echo $selectInfo['mail'] ?>></input>

            <p>status</p>
            <input type="radio" id="expert" name="status" value="1" >
            <label for="expert">expert</label>

            <input type="radio" id="senior" name="status" value="2">
            <label for="senior">senior</label>

            <input type="radio" id="apprenti" name="status" value="3" checked>
            <label for="apprenti">apprenti</label>



            <button type = "submit" name = "updateEmployee" id="updateEmployee">Modification de tache</button>    

  
        <div class="row pop-up" style = 'display:none'>
            <div class="box small-6 large-centered" >
            <a href="#" class="close-button">&#10006;</a>
            <h3>Propar</h3>
            <p class="popUp">Les données de l'employé ont bien été modifié</p> 
            <button type="submit" name= "continue" class="continue" id="continue">Retour à la liste des employés</button>   
            </div>
        </div>

        <script src ="javascript/editEmp.js"></script>
<?php
include(__DIR__.'/components/footer.php');
?>
