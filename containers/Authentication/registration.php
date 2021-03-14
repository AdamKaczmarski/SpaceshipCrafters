<?php 
if (isset($_POST['btnRegister']) 
    && (!empty($_POST['usernameRegister']) 
    && !empty($_POST['firstNameRegister']) 
    && !empty($_POST['lastNameRegister']) 
    && !empty($_POST['phoneNumberRegister']) 
    && !empty($_POST['emailRegister']) 
    && !empty($_POST['passwordRegister'])
    && !empty($_POST['passwordConfirmRegister']))){
        echo "registration";
    } else {
        header("Location: ".$_POST['path']."?regEmpty");
    }
?>
