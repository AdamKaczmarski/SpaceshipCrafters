<?php 
if (isset($_POST['btnRegister']) 
    && (!empty($_POST['usernameRegister']) 
    && !empty($_POST['firstNameRegister']) 
    && !empty($_POST['lastNameRegister']) 
    && !empty($_POST['phoneNumberRegister']) 
    && !empty($_POST['emailRegister']) 
    && !empty($_POST['passwordRegister'])
    && !empty($_POST['passwordConfirmRegister'])
    && ($_POST['passwordRegister']==$_POST['passwordConfirmRegister']))){
        require("./../../db_operations/db_conn.php");
        $username= $_POST['usernameRegister'];
        $fname = $_POST['firstNameRegister'];
        $lname = $_POST['lastNameRegister'];
        $phnum = $_POST['phoneNumberRegister'];
        $email= $_POST['emailRegister'];
        $hpass= $_POST['passwordRegister'];
        $checkForTakenQuery = "SELECT * FROM adbt214_Users WHERE username='$username' OR email=''";
    } else {
        header("Location: ".$_POST['path']."?regEmpty");
    }
?>
