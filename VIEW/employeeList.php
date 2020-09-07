<?php
    session_start();
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

<?php
include('components/header.php')
?>


<div id ="employeeList">
    <table id="employeeListTable">
        
    </table>
</div>


    <script src ="javascript/employeeList.js"></script>

<?php
include('components/footer.php')
?>