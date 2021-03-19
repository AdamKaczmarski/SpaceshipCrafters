<?php
session_start();
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
    $username = $conn->real_escape_string(trim(@$_POST['username']));
    $hpass = md5($conn->real_escape_string(trim(@$_POST['password'])));
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
        $result->free_result();
    } else {
        changeURL($_POST['path'],'?logFail');
    }
    require("./../../db_operations/db_close.php");
} else  {
    changeURL($_POST['path'],'?logEmpty');   
}
?>
