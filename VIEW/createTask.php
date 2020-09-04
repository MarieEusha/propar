<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css'/>
    <title>Document</title>
    
</head>
<body>
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
        <button type="submit" name= "continue" class="continue" id="Oktask">Retour</button>   
        <button type="submit" name= "continue" class="continue" id="continue">Retour</button>   
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src ="javascript/createTask.js"></script>
</body>
</html>