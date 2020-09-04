$(document).ready(function(){

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
                        $('.pop-up').css('display:block');
                        $('.pop-up').fadeIn(1000);

                        $('.close-button').click(function (e) { 

                        $('.pop-up').fadeOut(700);
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
                }else if(response == "false"){
                    
                    $(function() {
                        $('.pop-up').css('display:block');
                        $('.pop-up').fadeIn(1000);

                        $('.close-button').click(function (e) { 

                        $('.pop-up').fadeOut(700);
                        $('#overlay').removeClass('blur-in');
                        $('#overlay').addClass('blur-out');
                        e.stopPropagation();
                        });
                    });

                    $("#okEmployee").click(function(){
                       window.location = "../VIEW/createEmployee.php";
                    });
                    $("#cancelEmployee").click(function(){
                        window.location = "../VIEW/employeeList.php";
                    });
                }
            },
            error:function(response){
                
                alert('error'); 

            },

        });
    });

});