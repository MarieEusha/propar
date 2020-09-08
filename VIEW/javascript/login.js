$(document).ready(function(){
    function errorMsg(msg){
        $('#errorMsg').html(msg)
        $('.danger-alert').css('display','block')
        $('.alert').delay(1000).fadeOut(2000);
    }
    $("#submit").click(function(e){
        e.preventDefault();
 
            $.ajax({
            url:'../CTRL/login.action.php',
            type:'POST',
            data: {
                login : $("#login").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                password : $("#password").val()
                
            },
            success:function(response){		
                if(response == "enter"){
                window.location = "../VIEW/taskAccount.php";
                }

                if(response == "error"){
                    let msg = "Votre mdp ou votre login est incorrect";
                    errorMsg(msg);
                }

                if(response == "nologin"){
                    let msg = "Il n'y a pas compte associé à ce login";
                    errorMsg(msg);
                }
            },
			error:function(response){
                
                let msg = 'error';
                errorMsg(msg);

            },

        });
    });
});
