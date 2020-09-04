$(document).ready(function(){
 
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

                if(response == "mdp"){
                    alert("Votre mdp est incorrect");
                }

                if(response == "login"){
                    alert("Votre login est incorrect");
                }

                if(response == "nologin"){
                    alert("Il n'y a pas compte associé à ce login")
                }
            },
			error:function(response){
                
				alert('error');

            },

        });
    });
});
