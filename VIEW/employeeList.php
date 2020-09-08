<?php
    session_start();
?>

<?php
include('components/header.php')
?>
<section class="content-header">
    <h1>
    Les employés
    </h1>
    <form method = "POST" action = "../CTRL/logout.action.php">
        <button class="btn btn-primary pull-right">
            Déconnexion
        </button>
    </form>
</section>


    <div  style=" display: none; width: 300px; margin-left: 47rem ;position: absolute; z-index: 20" class="alert danger-alert">
        <h3 id="errorMsg" style="font-size:20px"> </h3>
    </div>

<div id ="employeeList">
    <table id="employeeListTable">
        
    </table>
</div>

<?php if($_SESSION['employee']['status'] == 1 ){ ?>
<a href="createEmployee.php"><button type=submit name="createEmployee" id="idEmployee"> Ajouter un employé</button></a>

<?php } ?>
    <script src ="javascript/employeeList.js"></script>

<?php
include('components/footer.php')
?>