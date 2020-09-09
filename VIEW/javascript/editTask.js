
$(document).ready(function(){
    function errorMsg(msg){
        $('#errorMsg').html(msg)
        $('.danger-alert').css('display','block')
        $('.alert').delay(1000).fadeOut(2000);
    }
    $("#updateTask").click(function(e){
        e.preventDefault();

        $.ajax({
            url:'../CTRL/editTask.action.php',
            type:'POST',
            data: {
                label : $("#labelTask").val(),
                idTask : $("#idTask").val(),
                description : $("#description").val(),
                id_employee : $('#idEmp').val(),
                type : $("input[name='type']:checked").val()
                                
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
                    $("#continue").click(function(){
                        window.location = "../VIEW/taskAccount.php";
                    });
                }else if(response == "error"){
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