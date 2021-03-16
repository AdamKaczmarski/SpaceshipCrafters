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
        $username= $conn->real_escape_string(trim($_POST['usernameRegister']));
        $fname = $conn->real_escape_string(trim($_POST['firstNameRegister'])); //MAKE IT ALL LOWER CASE AND JUST THE FIRST LETTER TO BE UPPER CASE
        $lname = $conn->real_escape_string(trim($_POST['lastNameRegister'])); //MAKE IT ALL LOWER CASE AND JUST THE FIRST LETTER TO BE UPPER CASE
        $phnum = $conn->real_escape_string(trim($_POST['phoneNumberRegister'])); //ADD VALIDATION
        $email= $conn->real_escape_string(trim($_POST['emailRegister']));
        $hpass= md5($conn->real_escape_string(trim($_POST['passwordRegister'])));
        $checkForTakenQuery = "SELECT * FROM adbt214_Users WHERE username='$username' OR email='$email';";
        if ($resultTaken = $conn->query($checkForTakenQuery)){
            if($resultTaken->num_rows>0){
                header("Location: ".$_POST['path']."?regTaken");
            } else {
                $insertQuery="INSERT INTO adbt214_Users (username,first_name,last_name,phone_number,email,password) VALUES('$username','$fname','$lname','$phnum','$email','$hpass');";
                if ($resultInsert = $conn->query($insertQuery)){
                    header("Location: ".$_POST['path']."?regSuccess");
                }
            }
        }
        
    } else {
        if(strpos($_POST['path'],"?")>0){
            $newpath = str_replace(substr($_POST['path'],strpos($_POST['path'],"?")),"",$_POST['path']);
            echo $newpath;
            header("Location: ".$newpath."?regEmpty");
        } else {
            header("Location: ".$_POST['path']."?regEmpty");
        }
        
       
    }
?>
