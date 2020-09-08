$(document).ready(function(){
    function errorMsg(msg){
        $('#errorMsg').html(msg)
        $('.danger-alert').css('display','block')
        $('.alert').delay(1000).fadeOut(2000);
    }
    $("#updateEmployee").click(function(e){
        e.preventDefault();

        $.ajax({
            url:'../CTRL/editEmp.action.php',
            type:'POST',
            data: {
                lastname : $("#nameEmp").val(),
                firstname : $("#firstname").val(),
                mail : $("#mail").val(),
                id_employee : $('#idEmp').val(),
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
                    $("#continue").click(function(){
                        window.location = "../VIEW/employeeList.php";
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