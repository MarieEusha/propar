$(document).ready(function(){
    $("#tableCreatedTask").hide();
    $("#yourTableDone").hide();
    $("#yourTableProgress").show();
    
    
    $("#allCreatedTask").click(function(){
        $("#allCreatedList").empty();
        $("#tableCreatedTask").show();
        $("#yourTableDone").hide();
        $("#yourTableProgress").hide();
    })

    $("#yourTask").click(function(){
        $("#yourInProgressList").empty();
        $("#tableCreatedTask").hide();
        $("#yourTableDone").hide();
        $("#yourTableProgress").show();
    })

    $("#yourTaskDone").click(function(){
        $("#yourDoneList").empty();
        $("#tableCreatedTask").hide();
        $("#yourTableDone").show();
        $("#yourTableProgress").hide();

    })



    $("#allCreatedTask").click(function(e){
        e.preventDefault();

            $.ajax({
            url:'../CTRL/taskAccount.action.php',
            type:'POST',
            dataType:'json',

         success:function(response){	
                var status = response['status']

                $("#allCreatedList").append(
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
                             "<th>" + "Action"+
                             "</th>" +
                        "</tr>"+
                    "</thead>"
                    )

                    response['allTask'][0].forEach(function (element){
                        let $htmlCT = "<tr>" +
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
                        "<td>"+
                            "<button type=submit>"+
                            "Attribution" +
                            "</button>";

                        if (status == 1) {
                            $htmlCT += "<button type=submit>"+
                                    "Edit" +
                                "</button>"+
                                "<form action=\"../CTRL/deleteTask.action.php\" method=\"POST\" onsubmit=\"return confirm('Etes-vous sur de votre choix ?');\" class=\"inline\">"+
                                    "<input type=\"hidden\" name= \"idTask\" value=\"" + element.id_task + "\" />"+
                                    "<button type=submit>"+
                                        "Delete" +
                                    "</button>"+
                                "</form>";
                        }

                        $htmlCT += "</td>" +
                                "</tr>";

                        $('#allCreatedList').append($htmlCT)
                    });

         },
            error:function(response){
                console.log(table);
                alert('error'); 

            },

        });
    });

    $("#yourTask").click(function(e){
        e.preventDefault();

            $.ajax({
            url:'../CTRL/taskAccount.action.php',
            type:'POST',
            dataType:'json',

         success:function(response){	
            var status = response['status']
            
                $("#yourInProgressList").append(
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
                            "<th>" + "Action"+
                            "</th>" +
                        "</tr>"+
                    "</thead>"
                        )
                        response['allTask'][1].forEach(function (element){
                             let $htmlIPT = 
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
                                    "<td>"+
                                        "<button type=submit>"+
                                            "Terminé" +
                                        "</button>";

                                    if (status == 1) {
                                        $htmlIPT += "<button type=submit>"+
                                            "Edit" +
                                            "</button>"+
                                            "<form action=\"../CTRL/deleteTask.action.php\" method=\"POST\" onsubmit=\"return confirm('Etes-vous sur de votre choix ?');\" class=\"inline\">"+
                                                "<input type=\"hidden\" name= \"idTask\" value=\"" + element.id_task + "\" />"+
                                                "<button type=submit>"+
                                                    "Delete" +
                                                "</button>"+
                                            "</form>";
                                    }

                            $htmlIPT += "</td>" +
                                "</tr>";
                                $('#yourInProgressList').append($htmlIPT)
                        });

         },
            error:function(response){
                
                alert('error'); 

            },

        });
    });

    $("#yourTaskDone").click(function(e){
        e.preventDefault();

            $.ajax({
            url:'../CTRL/taskAccount.action.php',
            type:'POST',
            dataType:'json',

         success:function(response){	
            var status = response['status']
                $("#yourDoneList").append(
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
                            "<th>" + "Action"+
                            "</th>" +
                        "</tr>"+
                    "</thead>"
                        )
                        response['allTask'][2].forEach(function (element){
                           
                            let $htmlDT =  "<tr>" +
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
                                    "</td>"    
                                    if (status == 1) {
                                        $htmlDT += "<td>"+
                                        "<button type=submit>"+
                                            "Edit" +
                                        "</button>"+
                                        "<form action=\"../CTRL/deleteTask.action.php\" method=\"POST\" class=\"inline\">"+
                                            "<input type=\"hidden\" name= \"idTask\" value=\"" + element.id_task + "\" />"+
                                            "<button type=submit>"+
                                                "Delete" +
                                            "</button>"+
                                        "</form>";
                                    }

                            $htmlDT += "</td>" +
                                "</tr>";
                                $('#yourDoneList').append($htmlDT)
                        });

         },
            error:function(response){
                
                alert('error'); 

            },

        });
    });

   


});