<?php
    session_start();
?>
<?php 
unset($_SESSION["employee"]);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../VIEW/css/style.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css'/>
    <title>propar</title>
</head>
<body>
    <a href="login.php"><button class="btn btn-primary pull-right" id="login">Se connecter</button></a>
    <button type="submit" class="btn btn-dark" id="createdTask">Tâches crées</button>
    <button type="submit" class="btn btn-dark" id="inProgressTask">Tâches en cours</button>
    <button type="submit" class="btn btn-dark" id="TaskDone">Tâches terminées</button>
    <div id ="tableCreated">
        <table class="table" id="createdList">
        
        </table>
    </div>
    <div id ="tableProgress">
        <table class="table" id="inProTask">
        
        </table>
    </div>
    <div id ="tableDone">
        <table class="table" id="DoneList">
        
        </table>
    </div>

    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.min.js'></script>
    <script src ="javascript/index.js"></script>

</body>
</html>

<?php
include(__DIR__.'/components/footer.php');
?>