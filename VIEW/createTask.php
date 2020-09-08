<?php
    session_start();
?>
<?php
include(__DIR__.'/components/header.php')
?>

    <div  style=" display: none; width: 300px; margin-left: 47rem ;position: absolute; z-index: 20" class="alert danger-alert">
        <h3 id="errorMsg" style="font-size:20px"> </h3>
    </div>

    <div id="overlay" class="cover blur-in">
            <p>Libellé </p>
            <input type="text" name='labelTask' id="labelTask"></input>
            <p>Description</p>
            <input type="text" name='description' id="description"></input>

            <p>Prénom du client</p>
            <input type="text" name='firstname' id="firstname"></input>

            <p>Nom du client</p>
            <input type="text" name='lastname' id="lastname"></input>

            <p>Mail du client</p>
            <input type="text" name='mail' id="mail"></input>

            <p>Type de tâches</p>
            <input type="radio" id="importante" name="type" value="1" checked>
            <label for="importante">importante</label>

            <input type="radio" id="moyenne" name="type" value="2">
            <label for="moyenne">moyenne</label>

            <input type="radio" id="petite" name="type" value="3">
            <label for="petite">petite</label>



            <button type = "submit" name = "createTask" id="createTask">Création de tache</button>    
    </div>
    <div class="row pop-up" style = 'display:none'>
        <div class="box small-6 large-centered" >
        <a href="#" class="close-button">&#10006;</a>
        <h3>Propar</h3>
        <p class="popUp">Votre tâche a bien été crée</p>
        <button type="submit" name= "continue" class="continue" id="Oktask">OK</button>   
        <button type="submit" name= "continue" class="continue" id="continue">Retour à la liste de tâches</button>   
        </div>
    </div>

    <script src ="javascript/createTask.js"></script>
<?php
include(__DIR__.'/components/footer.php')
?>