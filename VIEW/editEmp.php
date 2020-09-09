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
    <div class="row pop-up" style = 'display:none'>
            <div class="box small-6 large-centered" >
            <a href="#" class="close-button">&#10006;</a>
            <h3>Propar</h3>
            <p class="popUp">Les données de l'employé ont bien été modifié</p> 
            <button type="submit" name= "continue" class="continue" id="continue">Retour à la liste des employés</button>   
            </div>
    </div>

    <div class ="margin-top margin-left">
        <h2>Edition des informations de l'employé</h2>
        <div id="overlay" class="cover blur-in">
            <input type ="hidden" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name ="idEmp" id="idEmp" value=<?php echo $id_emp ?>></input>

            <p>Nom </p>
            <div class="input-group mx-sm-3 mb-2">
                <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='nameEmp' id="nameEmp" value=<?php echo $selectInfo['lastname'] ?>></input>
            </div>

            <p>Prénom</p>
            <div class="input-group mx-sm-3 mb-2">
                <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='firstname' id="firstname" value=<?php echo $selectInfo['firstname'] ?>></input>
            </div>

            <p>Mail</p>
            <div class="input-group mx-sm-3 mb-2">
                <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='mail' id="mail" value=<?php echo $selectInfo['mail'] ?>></input>
            </div>

            <p>status</p>
            <div class="input-group mx-sm-3 mb-2">
                <div class ="radio">
                    <input type="radio" id="expert" name="status" value="1" >
                    <label for="expert">expert</label>
                </div>
                <div class ="radio">
                    <input type="radio" id="senior" name="status" value="2">
                    <label for="senior">senior</label>
                </div>
                <div class ="radio">
                    <input type="radio" id="apprenti" name="status" value="3" checked>
                    <label for="apprenti">apprenti</label>
                </div>
            </div>
            <div class = "center">
                <button type = "submit" class= "btn btn-primary" name = "updateEmployee" id="updateEmployee">Modification des informations</button>    
            </div>

  
        </div>
    </div>

        <script src ="javascript/editEmp.js"></script>
<?php
include(__DIR__.'/components/footer.php');
?>
