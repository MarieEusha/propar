$(document).ready(function(){
    //$("#tableCreated").hide();
   // $("#tableDone").hide();
   // $("#tableProgress").show();
    
    
    $("#createdTask").click(function(){
        $("#createdList").empty();
        $("#tableCreated").show();
        $("#tableDone").hide();
        $("#tableProgress").hide();
    })

    $("#inProgressTask").click(function(){
        $("#inProTask").empty();
        $("#tableCreated").hide();
        $("#tableDone").hide();
        $("#tableProgress").show();
    })

    $("#TaskDone").click(function(){
        $("#DoneList").empty();
        $("#tableCreated").hide();
        $("#tableDone").show();
        $("#tableProgress").hide();

    })



    $("#createdTask").click(function(e){
        e.preventDefault();

            $.ajax({
            url:'../CTRL/index.action.php',
            type:'POST',
            dataType:'json',

         success:function(response){	

                $("#createdList").append(
                    "<thead class='thead-dark'>" +
                        "<tr>" +
                            "<th scope='col'>" + "#"+
                            "</th>"+
                            "<th scope='col'>" + "Tâche"+
                            "</th>"+
                           "<th scope='col'>" + "Type"+
                           "</th>"+
                            "<th scope='col'>" + "Description"+
                            "</th>"+
                            "<th scope='col'>" + "Client"+
                            "</th>"+
                            "<th scope='col'>" + "Date de création"+
                            "</th>"+
                           "<th scope='col'>" + "Status"+
                            "</th>"+
                            "</th>"+
                            "<th scope='col'>" + "Employé"+
                             "</th>" +
                        "</tr>"+
                    "</thead>"+
                    "<tbody id='tbodyWait'>"  + "</tbody>" 
                        )
                        response[0].forEach(function (element){
                            let $htmlIndex =
                                "<tr>" +
                                    "<td>"+
                                        element.id_task +
                                    "</td>" +
                                    "<td>"+
                                        element.task_label +
                                    "</td>" +
                                    "<td>"+
                                        element.type_label +
                                    "</td>" +
                                    "<td>"+
                                        element.description +
                                    "</td>" +
                                    "<td style=' text-transform:capitalize;'>"+
                                        element.customer_firstname + ' ' + element.customer_lastname +
                                    "</td>" +
                                    "<td>"+
                                        element.order_date +
                                    "</td>" +
                                    "<td>"+
                                        "En attente" +
                                    "</td>" +
                                    "<td>"+
                                    "Non attribué" +
                                    "</td>" +
                                
                                "</tr>"
                                $('#tbodyWait').append($htmlIndex);
                        });
                        $(document).ready( function () {
                            $('#createdList').DataTable();
                        } );

         },
            error:function(response){
                
                alert('error'); 

            },

        });
    });

    $("#inProgressTask").click(function(e){
        e.preventDefault();

            $.ajax({
            url:'../CTRL/index.action.php',
            type:'POST',
            dataType:'json',

         success:function(response){	
            
                $("#inProTask").append(
                    "<thead class='thead-dark'>" +
                        "<tr>" +
                            "<th scope='col'>" + "#"+
                            "</th>"+
                            "<th scope='col'>" + "Tâche"+
                            "</th>"+
                           "<th scope='col'>" + "Type"+
                           "</th>"+
                            "<th scope='col'>" + "Description"+
                            "</th>"+
                            "<th scope='col'>" + "Client"+
                            "</th>"+
                            "<th scope='col'>" + "Date d'attribution" +
                            "</th>"+
                           "<th scope='col'>" + "Status"+
                            "</th>"+
                            "<th scope='col'>" + "Employé"+
                            "</th>"+
                        "</tr>"+
                    "</thead>"+
                    "<tbody id='tbodyPro'>"  + "</tbody>" 
                        )
                        response[1].forEach(function (element){
                            let $htmlIndPro =                        
                                "<tr>" +
                                    "<th>"+
                                        element.id_task +
                                    "</th>" +
                                    "<td>"+
                                        element.task_label +
                                    "</td>" +
                                    "<td>"+
                                        element.type_label +
                                    "</td>" +
                                    "<td>"+
                                        element.description +
                                    "</td>" +
                                    "<td style=' text-transform:capitalize;'>"+
                                        element.customer_firstname + ' ' + element.customer_lastname +
                                    "</td>" +
                                    "<td>"+
                                        element.in_progress_date +
                                    "</td>" +
                                    "<td>"+
                                        "En cours" +
                                    "</td>" +
                                    "<td style=' text-transform:capitalize;'>"+
                                        element.employee_firstname + ' ' + element.employee_lastname +
                                    "</td>" +
            
                                "</tr>"
                                $('#tbodyPro').append($htmlIndPro);
                        });
                        $(document).ready( function () {
                            $('#inProTask').DataTable();
                        } );

         },
            error:function(response){
                
                alert('error'); 

            },

        });
    });

    $("#TaskDone").click(function(e){
        e.preventDefault();

            $.ajax({
            url:'../CTRL/index.action.php',
            type:'POST',
            dataType:'json',

         success:function(response){	
            
                $("#DoneList").append(
                    "<thead class='thead-dark'>" +
                        "<tr>" +
                            "<th scope='col'>" + "#"+
                            "</th>"+
                            "<th scope='col'>" + "Tâche"+
                            "</th>"+
                           "<th scope='col'>" + "Type"+
                           "</th>"+
                            "<th scope='col'>" + "Description"+
                            "</th>"+
                            "<th scope='col'>" + "Client"+
                            "</th>"+
                            "<th scope='col'>" + "Date de fin" +
                            "</th>"+
                           "<th scope='col'>" + "Status"+
                            "</th>"+
                            "<th scope='col'>" + "Employé"+
                            "</th>"+
                        "</tr>"+
                    "</thead>"+
                    "<tbody id='tbodyDone'>"  + "</tbody>" 
                        )
                        response[2].forEach(function (element){
                          let $htmlIndDone =
                                "<tr>" +
                                    "<th>"+
                                        element.id_task +
                                    "</th>" +
                                    "<td>"+
                                        element.task_label +
                                    "</td>" +
                                    "<td>"+
                                        element.type_label +
                                    "</td>" +
                                    "<td>"+
                                        element.description +
                                    "</td>" +
                                    "<td style=' text-transform:capitalize;'>"+
                                        element.customer_firstname + ' ' + element.customer_lastname +
                                    "</td>" +
                                    "<td>"+
                                        element.ending_date +
                                    "</td>" +
                                    "<td>"+
                                        "Terminée" +
                                    "</td>" +
                                    "<td style=' text-transform:capitalize;'>"+
                                        element.employee_firstname + ' ' + element.employee_lastname +
                                    "</td>" +
            
                                "</tr>"
                                $('#tbodyDone').append($htmlIndDone)
                        });
                        $(document).ready( function () {
                            $('#DoneList').DataTable();
                        } );
         },
            error:function(response){
                
                alert('error'); 

            },

        });
    });

   


});

