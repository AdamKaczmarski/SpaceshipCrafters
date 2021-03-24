<?php 
session_start();
//https://www.php.net/manual/en/function.filter-var.php used for form validation
//https://www.w3schools.com/php/php_form_url_email.asp
//https://www.php.net/manual/en/function.preg-match.php
function scrapeData($conn,$data){
    $data = trim($data);
    $data = $conn->real_escape_string($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    $data = strip_tags($data);
    return $data;
}
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
        $username= scrapeData($conn,$_POST['usernameRegister']);
        $fname = ucfirst(strtolower(scrapeData($conn,$_POST['firstNameRegister']))); //MAKE IT ALL LOWER CASE AND JUST THE FIRST LETTER TO BE UPPER CASE
        $lname = ucfirst(strtolower(scrapeData($conn,$_POST['lastNameRegister']))); //MAKE IT ALL LOWER CASE AND JUST THE FIRST LETTER TO BE UPPER CASE
        $phnum = scrapeData($conn,$_POST['phoneNumberRegister']); //ADD VALIDATION
        $email= strtolower(scrapeData($conn,$_POST['emailRegister']));
        $hpass= md5(scrapeData($conn,$_POST['passwordRegister']));

        if (preg_match("/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/",$email) &&  /*preg_match("/^[a-zA-Z]+$/",$fname)
            && preg_match("/^[a-zA-Z]+$/",$lname) &&*/ preg_match("/^(\+|00)\d[0-9]{7,17}$/",$phnum) 
            && preg_match("/^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$/",$_POST['passwordRegister'])){
                $checkForTakenQuery = "SELECT * FROM adbt214_Users WHERE username='$username' OR email='$email';";
                if ($resultTaken = $conn->query($checkForTakenQuery)){
                    if($resultTaken->num_rows>0){
                        header("Location: ".$_POST['path']."?regTaken");
                    } else {
                        $insertQuery="INSERT INTO adbt214_Users (username,first_name,last_name,phone_number,email,password) VALUES('$username','$fname','$lname','$phnum','$email','$hpass');";
                        if ($resultInsert = $conn->query($insertQuery)){
                            $_SESSION['loggedUser']=$username;
                            
                            header("Location: ".$_POST['path']."?regSuccess");
                        }
                    }
                    
                }
        } else {
            if(strpos($_POST['path'],"?")>0){
                $newpath = str_replace(substr($_POST['path'],strpos($_POST['path'],"?")),"",$_POST['path']);
                echo $newpath;
                header("Location: ".$newpath."?regWrongInputs");
            } else {
                header("Location: ".$_POST['path']."?regWrongInputs");
            }
        }
    } else if(($_POST['passwordRegister']!=$_POST['passwordConfirmRegister'])) {
        if(strpos($_POST['path'],"?")>0){
            $newpath = str_replace(substr($_POST['path'],strpos($_POST['path'],"?")),"",$_POST['path']);
            echo $newpath;
            header("Location: ".$newpath."?regPassNMatch");
        } else {
            header("Location: ".$_POST['path']."?regPassNMatch");
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
