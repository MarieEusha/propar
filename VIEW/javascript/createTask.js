$(document).ready(function(){
    function errorMsg(msg){
        $('#errorMsg').html(msg)
        $('.danger-alert').css('display','block')
        $('.alert').delay(1000).fadeOut(2000);
    }
    
    $("#createTask").click(function(e){
        e.preventDefault();

            $.ajax({
            url:'../CTRL/createTask.action.php',
            type:'POST',
            data: {

                label : $("#labelTask").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                description : $("#description").val(),
                type : $("input[name='type']").val(),
                firstname : $("#firstname").val(),
                lastname : $("#lastname").val(),
                mail : $("#mail").val()
                           
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
                    $("#Oktask").click(function(){
                        window.location = "../VIEW/createTask.php";
                    });
                    
                    $("#continue").click(function(){
                        window.location = "../VIEW/taskList.php";
                    });
                }else if(response == "emptyField"){
                    let msg = "Un des champs est vide";
                    errorMsg(msg);
                }
            },
            error:function(response){
                
                alert('error'); 

            },

        });
    });

});