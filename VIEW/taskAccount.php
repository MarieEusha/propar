<?php
    session_start();
?>
<?php
include('components/header.php')
?>

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

    <script src ="javascript/taskAccount.js"></script>

<?php
include('components/footer.php')
?>