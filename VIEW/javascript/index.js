$(document).ready(function(){
    $("#tableCreated").hide();
    $("#tableDone").hide();
    $("#tableProgress").show();
    
    
    $("#createdTask").click(function(){
        $("#createdList").empty();
        $("#tableCreated").show();
        $("#tableDone").hide();
        $("#tableProgress").hide();
    })

    $("#inProgressTask").click(function(){
        $("#tableProgress").empty();
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
                    "<thead>" +
                        "<tr>" +
                            "<th>" + "#"+
                            "</th>"+
                            "<th>" + "Tâche"+
                            "</th>"+
                           "<th>" + "Type"+
                           "</th>"+
                            "<th>" + "Description"+
                            "</th>"+
                            "<th>" + "Client"+
                            "</th>"+
                            "<th>" + "Date de création"+
                            "</th>"+
                           "<th>" + "Status"+
                            "</th>"+
                            "</th>"+
                            "<th>" + "Employé"+
                             "</th>" +
                        "</tr>"+
                    "</thead>"
                        )
                        response[0].forEach(function (element){
                            $('#createdList').append(
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
                                        element.order_date +
                                    "</td>" +
                                    "<td>"+
                                        "En attente" +
                                    "</td>" +
                                    "<td>"+
                                    "Non attribué" +
                                    "</td>" +
                                
                                "</tr>"
                            )
                        });

         },
            error:function(response){
                console.log(table);
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
            
                $("#tableProgress").append(
                    "<thead>" +
                        "<tr>" +
                            "<th>" + "#"+
                            "</th>"+
                            "<th>" + "Tâche"+
                            "</th>"+
                           "<th>" + "Type"+
                           "</th>"+
                            "<th>" + "Description"+
                            "</th>"+
                            "<th>" + "Client"+
                            "</th>"+
                            "<th>" + "Date d'attribution" +
                            "</th>"+
                           "<th>" + "Status"+
                            "</th>"+
                            "<th>" + "Employé"+
                            "</th>"+
                        "</tr>"+
                    "</thead>"
                        )
                        response[1].forEach(function (element){
                            $('#tableProgress').append(
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
                            )
                        });

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
                    "<thead>" +
                        "<tr>" +
                            "<th>" + "#"+
                            "</th>"+
                            "<th>" + "Tâche"+
                            "</th>"+
                           "<th>" + "Type"+
                           "</th>"+
                            "<th>" + "Description"+
                            "</th>"+
                            "<th>" + "Client"+
                            "</th>"+
                            "<th>" + "Date de fin" +
                            "</th>"+
                           "<th>" + "Status"+
                            "</th>"+
                            "<th>" + "Employé"+
                            "</th>"+
                        "</tr>"+
                    "</thead>"
                        )
                        response[2].forEach(function (element){
                            $('#DoneList').append(
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
                            )
                        });

         },
            error:function(response){
                
                alert('error'); 

            },

        });
    });

   


});

