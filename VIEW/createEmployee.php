<?php
include(__DIR__.'/components/header.php')
?>

    <div  style=" display: none; width: 300px; margin-left: 47rem ;position: absolute; z-index: 20" class="alert danger-alert">
        <h3 id="errorMsg" style="font-size:20px"> </h3>
    </div>
    <div class="row pop-up" id="cEmp" style = 'display:none'>
        <div class="box small-6 large-centered" >
        <h3>Propar</h3>
        <p class="popUp">L'employé a bien été crée</p>
        <button type="submit" name= "continue" class="continue" id="ok">OK</button>
        <button type="submit" name= "continue" class="continue" id="cancel">Retour à la page précédente</button>   
        </div>
    </div>
    <div class ="margin-top margin-left">
        <h2>Création d'employé</h2>
        <div id="overlay" class="cover blur-in">
                <p>Nom </p>
                <div class="input-group mx-sm-3 mb-2">
                    <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='nameEmployee' id="nameEmployee"></input>
                </div>

                <p>Prenom</p>
                <div class="input-group mx-sm-3 mb-2">
                    <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='lastnameEmployee' id="lastnameEmployee"></input>
                </div>

                <p>Login</p>
                <div class="input-group mx-sm-3 mb-2">
                    <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='loginEmp' id="loginEmp"></input>
                </div>

                <p>Mot de passe</p>
                <div class="input-group mx-sm-3 mb-2">
                    <input type="password" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='mdp' id="mdp"></input>
                </div>

                <p>email</p>
                <div class="input-group mx-sm-3 mb-2">
                    <input type="text" class="form-control input" aria-label="Default" aria-describedby="inputGroup-sizing-default" name='mail' id="mail"></input>
                </div>

                <p>Status de l'employé</p>
               <!-- <select name="status" id="status">
                    <option value="1">Expert</option>
                    <option value="2">Senior</option>
                    <option value="3">apprenti</option>
                </select>-->
                <div class="input-group mx-sm-3 mb-2">
                    <div class="radio">
                        <input type="radio" id="expert" name="status" value="1">
                        <label for="expert">Expert</label>
                    </div>
                    <div class="radio">
                        <input type="radio" id="senior" name="status" value="2">
                        <label for="senior">Senior</label>
                    </div>
                    <div class="radio">
                        <input type="radio" id="apprenti" name="status" value="3">
                        <label for="apprenti">Apprenti</label>
                    </div>
                </div>
                <div class ="center">
                    <button class= "btn btn-primary" name = "createEmployee" id="createEmployee">Création d'employé</button>    
                </div>
        </div>

</div>
    <script src ="javascript/createEmployee.js"></script>
<?php
include(__DIR__.'/components/footer.php')
?>