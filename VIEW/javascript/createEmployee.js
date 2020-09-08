$(document).ready(function(){

    function errorMsg(msg){
        $('#errorMsg').html(msg)
        $('.danger-alert').css('display','block')
        $('.alert').delay(1000).fadeOut(2000);
    }

    $("#createEmployee").click(function(e){
        e.preventDefault();

            $.ajax({
            url:'../CTRL/createEmployee.action.php',
            type:'POST',
            data: {    
                firstname : $("#nameEmployee").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                lastname : $("#lastnameEmployee").val(),
                login :  $("#loginEmp").val(),
                password :  $("#mdp").val(),
                mail : $("#mail").val(),
                status : $("input[name='status']").val()

            },
         success:function(response){	

                if(response == "enter"){
                    $(function() {
                        $('#cEmp').css('display:block');
                        $('#cEmp').fadeIn(1000);

                        $('.close-button').click(function (e) { 

                        $('#cEmp').fadeOut(700);
                        $('#overlay').removeClass('blur-in');
                        $('#overlay').addClass('blur-out');
                        e.stopPropagation();
                        });
                    });

                    $("#ok").click(function(){
                       window.location = "../VIEW/createEmployee.php";
                    });
                    $("#cancel").click(function(){
                        window.location = "../VIEW/employeeList.php";
                    });
                }else if(response == "mail"){
                    let msg = "Votre mail n'est pas valide";
                    errorMsg(msg);
                    
                }else if (response == "emptyField"){
                    let msg = "Un des champs est vide";
                    errorMsg(msg);
                }else if (response == "existLogin"){
                    let msg = "Cet employé existe déjà"
                    errorMsg(msg);
                }
            },
            error:function(response){
                
                alert('error'); 

            },

        });
    });

});