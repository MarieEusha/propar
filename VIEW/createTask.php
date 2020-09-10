<?php
    session_start();
?>
<?php
include(__DIR__.'/components/header.php')
?>

    <div  style=" display: none; width: 300px; margin-left: 47rem ;position: absolute; z-index: 20" class="alert danger-alert">
        <h3 id="errorMsg" style="font-size:20px"> </h3>
    </div>
    <div class="row pop-up" id= "cTask" style = 'display:none'>
            <div class="box small-6 large-centered" >
                <a href="#" class="close-button">&#10006;</a>
                <h3>Propar</h3>
                <p class="popUp">Votre tâche a bien été crée</p>
                <button type="submit" name= "continue" class="continue" id="Oktask">OK</button>   
                <button type="submit" name= "continue" class="continue" id="continue">Retour à la liste de tâches</button>   
            </div>
        </div>
    <div class ="margin-top margin-left">
        <h2>Création de tâche</h2>
        <div id="overlay" class="cover blur-in">
                <p>Libellé </p>
                <div class="input-group mx-sm-3 mb-2">
                    <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='labelTask' id="labelTask"></input>
                </div>
                    <p>Description</p>
                <div class="input-group mx-sm-3 mb-2">
                    <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='description' id="description"></input>
                </div>
                <p>Prénom du client</p>
                <div class="input-group mx-sm-3 mb-2">
                    <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='firstname' id="firstname"></input>
                </div>
                <p>Nom du client</p>
                <div class="input-group mx-sm-3 mb-2">
                    <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='lastname' id="lastname"></input>
                </div>
                <p>Mail du client</p>
                <div class="input-group mx-sm-3 mb-2">
                    <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='mail' id="mail"></input>
                </div>
                <p>Type de tâches</p>
                <div id="divRadio" class="input-group mx-sm-3 mb-2">
                </div>
                <div class="center">
                    <button type = "submit" class= "btn btn-primary" name = "createTask" id="createTask">Création de tache</button>  
                </div>  
        </div>

    </div>

    <script src ="javascript/createTask.js"></script>
<?php
include(__DIR__.'/components/footer.php')
?>