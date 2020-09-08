<?php
    session_start();
?>
<?php 
unset($_SESSION);    
?>

<?php
include(__DIR__.'/components/header.php');
?>
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

    <script src ="javascript/index.js"></script>

<?php
include(__DIR__.'/components/footer.php');
?>