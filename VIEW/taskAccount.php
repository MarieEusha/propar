<?php
    session_start();
?>
<?php
include('components/header.php')
?>
<section class="content-header">
    <h1>
    Vos Taches
    </h1>
    <form method = "POST" action = "../CTRL/logout.action.php">
        <button type="submit" class="btn btn-primary pull-right">
            Déconnexion
        </button>
    </form>
</section>


<button type="submit" id="allCreatedTask">Tâches en attente</button>
<button type="submit" id="yourTask">Vos tâches en cours</button>
<button type="submit" id="yourTaskDone">Vos tâches terminées</button>


<div id ="tableCreatedTask">
    <table id="allCreatedList">
        
    </table>
</div>
<div id ="yourTableProgress">
    <table id="yourInProgressList">
        
    </table>
</div>
<div id ="yourTableDone">
    <table id="yourDoneList">
        
    </table>
</div>

    <a href="createTask.php"><button type=submit name="addTask" id="addTask" > Ajouter une tâche</button></a>
<?php if($_SESSION['employee']['status'] == 1 ){ ?>
    <button type=submit name = "revenue" id="revenue">Voir le chiffre d'affaire </button>
    <p id="pRevenue"></p>

    <a href = "../VIEW/createTypeTask.php"><button type submit name= "addType" id="addTask"> Ajout d'un type de tâche</button></a>

<?php }?>
    <script src ="javascript/taskAccount.js"></script>

<?php
include('components/footer.php')
?>