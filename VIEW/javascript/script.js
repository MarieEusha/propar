

   /* $("#createTask").click(function(e){
        e.preventDefault();
 
            $.ajax({
            url:'../CTRL/createTask.action.php',
            type:'POST',
            data: {
                label : $("#labelTask").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                description : $("#description").val(),
                type : $("input[name='type']").val(),
                customer : $("#id_customer").val()            
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
                }
            },
			error:function(response){
                
				alert('error');

            },

        });
    });*/

    $("#createTask").click(function(e){
        e.preventDefault();

            $.ajax({
            url:'../CTRL/index.action.php',
            type:'POST',
   
         success:function(response){	
             let response = JSON.parse(response);
             response.forEach(function(element) {
                 element.forEach(function(status){

                 })
                })

         },
         error:function(response){
                
            alert('error'); 

        },
   })
})



  
   /*


            /*

            response[1].forEach(function (element){
                $('#tBodyTableUnassignedJob').append(
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
                            element.firstname + ' ' + element.lastname +
                        "</td>" +
                        "<td>"+
                            element.ending_date +
                        "</td>" +
                        "<td>"+
                            element.status +
                        "</td>" +

                    "</tr>"
                )
            });*/