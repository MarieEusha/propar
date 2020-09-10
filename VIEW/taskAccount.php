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


<button type="submit" class="btn btn-dark" id="allCreatedTask">Tâches en attente</button>
<button type="submit" class="btn btn-dark" id="yourTask">Vos tâches en cours</button>
<button type="submit" class="btn btn-dark" id="yourTaskDone">Vos tâches terminées</button>


<div id ="tableCreatedTask">
    <table class ="table" id="allCreatedList">
        
    </table>
</div>
<div id ="yourTableProgress">
    <table class="table" id="yourInProgressList">
        
    </table>
</div>
<div id ="yourTableDone">
    <table class="table" id="yourDoneList">
        
    </table>
</div>
<?php if($_SESSION['employee']['status'] == 1 ){ ?>
    <button type=submit   class = "btn btn-outline-dark" name = "revenue" id="revenue">Voir le chiffre d'affaire </button>
    <p id="pRevenue"></p>

    <a href = "../VIEW/createTypeTask.php"><button type = submit  class = "btn btn-outline-info name= "addType" id="addTask"> Ajouter d'un type de tâche</button></a>

<?php }?>
    <a href="createTask.php"><button type=submit class = "btn btn-outline-info" name="addTask" id="addTask" > Ajouter une tâche</button></a>



    <script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.min.js'></script>
    <script src ="javascript/taskAccount.js"></script>

<?php
include('components/footer.php')
?>