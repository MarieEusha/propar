<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="login.php"><button id="login">Se connecter</button></a>
    <button type="submit" id="createdTask">Tâches crées</button>
    <button type="submit" id="inProgressTask">Tâches en cours</button>
    <button type="submit" id="TaskDone">Tâches terminées</button>
    <div id ="tableCreated">
        <table id="createdList">
        
        </table>
    </div>
    <div id ="tableProgress">
        <table id="inProTask">
        
        </table>
    </div>
    <div id ="tableDone">
        <table id="DoneList">
        
        </table>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src ="javascript/index.js"></script>
</body>
</html>