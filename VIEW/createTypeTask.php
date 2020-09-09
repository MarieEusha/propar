<?php
    session_start();
?>
<?php
include(__DIR__.'/components/header.php')
?>


    <div  style=" display: none; width: 300px; margin-left: 47rem ;position: absolute; z-index: 20" class="alert danger-alert">
        <h3 id="errorMsg" style="font-size:20px"> </h3>
    </div>


    <div class="row pop-up" style = 'display:none'>
        <div class="box small-6 large-centered" >
            <a href="#" class="close-button">&#10006;</a>
            <h3>Propar</h3>
            <p class="popUp">Votre type de tâche a bien été crée</p>
            <button type="submit" name= "continue" class="continue" id="Oktask">OK</button>   
            <button type="submit" name= "continue" class="continue" id="continue">Retour à la liste de tâches</button>   
        </div>
    </div>
    
    <div class ="margin-top margin-left">
        <h2>Création d'un type de tâche</h2>
    <div id="overlay" class="cover blur-in">
        <p>Libellé du type de tâches</p>
        <div class="input-group mx-sm-3 mb-2">
            <input type=text class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="labelType" name="labelType"></input>
        </div>
        
            <p>Prix</p>
        <div class="input-group mx-sm-3 mb-2">
            <input type=text class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" id="price" name="price"></input>
        </div>
        <div class="center">
            <button type=submit class="btn btn-primary" name="createType" id="createType">Ajouter un type de tâche</button>
        </div> 
    </div>
 

</div>
    <script src ="javascript/createType.js"></script>
<?php
include(__DIR__.'/components/footer.php')
?>