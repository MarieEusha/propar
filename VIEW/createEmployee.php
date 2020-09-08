<?php
include(__DIR__.'/components/header.php')
?>

    <div  style=" display: none; width: 300px; margin-left: 47rem ;position: absolute; z-index: 20" class="alert danger-alert">
        <h3 id="errorMsg" style="font-size:20px"> </h3>
    </div>


    <div id="overlay" class="cover blur-in">
            <p>Nom </p>
            <input type="text" name='nameEmployee' id="nameEmployee"></input>

            <p>Prenom</p>
            <input type="text" name='lastnameEmployee' id="lastnameEmployee"></input>

            <p>Login</p>
            <input type="text" name='loginEmp' id="loginEmp"></input>

            <p>Mot de passe</p>
            <input type="text" name='mdp' id="mdp"></input>

            <p>email</p>
            <input type="text" name='mail' id="mail"></input>

            <p>Status de l'employé</p>
            <input type="radio" id="expert" name="status" value="1" checked>
            <label for="expert">Expert</label>

            <input type="radio" id="senior" name="status" value="2">
            <label for="senior">Senior</label>

            <input type="radio" id="apprenti" name="status" value="3">
            <label for="apprenti">Apprenti</label>

            <button type = "submit" name = "createEmployee" id="createEmployee">Création d'employé'</button>    
    </div>

    <div class="row pop-up" id="cEmp" style = 'display:none'>
        <div class="box small-6 large-centered" >
        <h3>Propar</h3>
        <p class="popUp">L'employé a bien été crée</p>
        <button type="submit" name= "continue" class="continue" id="ok">OK</button>
        <button type="submit" name= "continue" class="continue" id="cancel">Retour à la page précédente</button>   
        </div>
    </div>
    <script src ="javascript/createEmployee.js"></script>
<?php
include(__DIR__.'/components/footer.php')
?>