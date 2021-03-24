<?php
session_start();
function scrapeData($conn,$data){
    $data = trim($data);
    $data = $conn->real_escape_string($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    $data = strip_tags($data);
    return $data;
}

function changeURL($x,$code){
    if(strpos($x,"?")>0){
        $newpath = str_replace(substr($x,strpos($x,"?")),"",$x);
        header("Location: ".$newpath.$code);
    } else {
        header("Location: ".$x.$code);
    }
}

if (isset($_POST['btnLogin']) && isset($_POST['username']) && isset($_POST['password']) && $_POST['username']!="" && $_POST['password']!=""){
    require("./../../db_operations/db_conn.php");
    $username = scrapeData($conn,@$_POST['username']);
    $hpass = md5(scrapeData($conn,@$_POST['password']));
    $query = "SELECT username FROM adbt214_Users WHERE username = '$username' AND password='$hpass';";
    if ($result = $conn->query($query)) {
        if ($result->num_rows==1){
            $_SESSION['loggedUser'] = $username;
            echo "<script>console.log('session set'+$_SESSION[loggedUser])</script>";
            if (isset($_POST['remember'])){
                setcookie('spaceship-crafters-username',$username,time()+86400*30,'/',"smcse.city.ac.uk","true");
            }
            changeURL($_POST['path'],'');
        } else {
            changeURL($_POST['path'],'?logFail');
        }
    } else {
        changeURL($_POST['path'],'?logFail');
    }
    require("./../../db_operations/db_close.php");
} else  {
    changeURL($_POST['path'],'?logEmpty');   
}
?>
