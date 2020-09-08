<!DOCTYPE html>
<?php
include(__DIR__.'/components/header.php');
?>

    <div  style=" display: none; width: 300px; margin-left: 47rem ;position: absolute; z-index: 20" class="alert danger-alert">
        <h3 id="errorMsg" style="font-size:20px"> </h3>
    </div>
    <h1>Connexion</h1>
        <p>Login</p>
        <input type="text" name= 'login' id="login"></input>
        <p>Mot de passe</p>
        <input type="password" name='password' id="password"></input>
        <button type= 'submit' id='submit' value = "Se connecter">Se connecter</button>
       
        <div class="row pop-up" id="noLogin" style = 'display:none'>
        <div class="box small-6 large-centered" >
        <h3>Propar</h3>
        <p class="popUp">L'employé a bien été crée</p>
        <button type="submit" name= "continue" class="continue" id="ok">OK</button>
        <button type="submit" name= "continue" class="continue" id="cancel">Retour à la page précédente</button>   
        </div>
    </div>
    <script src ="javascript/login.js"></script>
<?php
include('components/footer.php')
?>