'use-strict'

$('#password').on("change paste keyup",validate);
$('#confirm_password').on("change paste keyup",validate);



function validate(){
var password =$('#password').val();
var confirmPass = $('#confirm_password').val();
    if(password != confirmPass){
        $('#btn_submit').prop("disabled",true);   
    }else{
        $('#btn_submit').prop("disabled",false);
    }
    
}



