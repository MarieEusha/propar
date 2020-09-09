
$(document).ready(function(){
    
    function errorMsg(msg){
        $('#errorMsg').html(msg)
        $('.danger-alert').css('display','block')
        $('.alert').delay(1000).fadeOut(2000);
    }
    
    $.ajax({
        url:'../CTRL/employeeList.action.php',
        type:'POST',
        dataType:'json',

     success:function(response){	
            var status = response['status'];
            let $head =
                "<thead class='thead-dark'>" +
                    "<tr>" +
                        "<th scope='col'>" + "#"+
                        "</th>"+
                        "<th scope='col'>" + "Employé"+
                        "</th>"+
                        "<th scope='col'>" + "mail"+
                        "</th>"+
                        "<th scope='col'>" + "Status"+
                        "</th>";
                        if(status == 1){
                            $head += 
                                "<th scope='col'>" + "Action"+
                                "</th>" ;
                        }
                $head +=
                    "</tr>"+
                "</thead>"+
                "<tbody id='tbodyEmp'>"  + "</tbody>"           ;
                $("#employeeListTable").append($head);
                
                response['allEmployees'].forEach(function (element){
                    let $htmlE = 
                    "<tr>" +
                    "<td>"+
                        element.id_employee +
                    "</td>" +
                    "<td style='text-transform:capitalize;'>"+
                        element.firstname + ' ' + element.lastname +
                    "</td>" +
                    "<td>"+
                        element.mail +
                    "</td>" +
                    "<td>"+
                        element.label +
                    "</td>" +
                    "<td>";
                    if(status == 1){
                        $htmlE += 
                        "<form action=\"../CTRL/selectEmpInfo.action.php\" method=\"POST\" class=\"inline\">"+
                            "<input type=\"hidden\" name= \"idEmp\" value=\"" + element.id_employee + "\" />"+
                            "<button type=submit class='btn btn-outline-secondary'>"+
                                "Edit" +
                            "</button>"+
                        "</form>"+
                        "<form action=\"../CTRL/deleteEmployee.action.php\" method=\"POST\" onsubmit=\"return confirm('Souhaitez-vous supprimer cette tâche ?');\" class=\"inline\">"+
                            "<input type=\"hidden\" name= \"idEmp\" value=\"" + element.id_employee + "\" />"+
                            "<button type=submit class='btn btn-outline-danger'>"+
                                "Delete" +
                            "</button>"+
                        "</form>";
                    }
                        $htmlE += 
                        "</td>" +
                            "</tr>";
                            $("#tbodyEmp").append($htmlE)

                            $(document).ready( function () {
                                $('#employeeListTable').DataTable();
                            } );
                });
                if(response == "noEmp"){
                    let msg = "Il n'y pas d'employé dans la base données"
                    errorMsg(msg);
                }else if (response == "noStatus"){
                    let msg = "Vous n'avez pas de status";
                    error(msg);
                }

               


        },
        error:function(response){
            alert('error'); 

        },

    });
});
