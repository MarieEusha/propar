<?php
include('components/header.php')
?>

<section class="content-header">
    <h1>
    Vos Taches
    </h1>
    <button class="btn btn-primary pull-right">
        Déconnexion
    </button>
</section>

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
include('components/footer.php')
?>