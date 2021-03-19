$(document).ready(()=>{
    const letters=/^[a-zA-Z]+$/;
    $('#usernameRegister').keyup(()=>{
        if($('#usernameRegister').val().length>=2){
            $('#usernameRegister').removeClass("is-invalid");
            $('#usernameRegister').addClass("is-valid");
        } else {
            $('#usernameRegister').removeClass("is-valid");
            $('#usernameRegister').addClass("is-invalid");
        }
    });
    $("#firstNameRegister").keyup(()=>{
        if($("#firstNameRegister").val().match(letters)){
            $('#firstNameRegister').removeClass("is-invalid");
            $('#firstNameRegister').addClass("is-valid");
        } else {
            $('#firstNameRegister').removeClass("is-valid");
            $('#firstNameRegister').addClass("is-invalid");
        }
    });
    $("#lastNameRegister").keyup(()=>{
        if($("#lastNameRegister").val().match(letters)){
            $('#lastNameRegister').removeClass("is-invalid");
            $('#lastNameRegister').addClass("is-valid");
        } else {
            $('#lastNameRegister').removeClass("is-valid");
            $('#lastNameRegister').addClass("is-invalid");
        }
    });
    $("#emailRegister").keyup(()=>{
        const emailreg=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if($("#emailRegister").val().match(emailreg)){
            $('#emailRegister').removeClass("is-invalid");
            $('#emailRegister').addClass("is-valid");
        } else {
            $('#emailRegister').removeClass("is-valid");
            $('#emailRegister').addClass("is-invalid");
        }
    });


    $("#phoneNumberRegister").keyup(()=>{
        if ($("#phoneNumberRegister").val().length>=7 && $("#phoneNumberRegister").val().length<=17){
            const digits = /^[0-9]+$/;
            const num = $("#phoneNumberRegister").val();
            if (num[0]==='+'){
                let num1 = num.substring(1,num.length);
                if (num1.match(digits)){
                    $("#phoneNumberRegister").removeClass("is-invalid");
                    $("#phoneNumberRegister").addClass("is-valid");
                }   else {
                    $("#phoneNumberRegister").removeClass("is-valid");
                    $("#phoneNumberRegister").addClass("is-invalid");
                }
            } else if (num[0]==='0' && num[1]==='0'){
                if (num.match(digits)){
                    $("#phoneNumberRegister").removeClass("is-invalid");
                    $("#phoneNumberRegister").addClass("is-valid");
                }   else {
                    $("#phoneNumberRegister").removeClass("is-valid");
                    $("#phoneNumberRegister").addClass("is-invalid");
                }
            }
        } else{
            $("#phoneNumberRegister").addClass("is-invalid");
        }
        
    });
    let pass = null;
    $("#passwordRegister").keyup(()=>{
        const reg = /^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$/;
        if($("#passwordRegister").val().match(reg)){
            pass=$("#passwordRegister").val();
                $("#passwordRegister").removeClass("is-invalid");
                $("#passwordRegister").addClass("is-valid");
            }   else {
                $("#passwordRegister").removeClass("is-valid");
                $("#passwordRegister").addClass("is-invalid");
            }
    });
    $("#passwordConfirmRegister").keyup(()=>{
        const reg = /^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$/;
        if($("#passwordConfirmRegister").val().match(reg) && $("#passwordConfirmRegister").val()===pass){
                $("#passwordConfirmRegister").removeClass("is-invalid");
                $("#passwordConfirmRegister").addClass("is-valid");
            }   else {
                $("#passwordConfirmRegister").removeClass("is-valid");
                $("#passwordConfirmRegister").addClass("is-invalid");
            }
    });
    
});
function changedForm(){
    let count=0;
    $("input").each(function() {
        var element = $(this);
        if (element.hasClass("is-valid")) {
            count++;
            
    }
    if (count===7){
        $("#btnRegister").removeAttr("disabled");
    }
});
}