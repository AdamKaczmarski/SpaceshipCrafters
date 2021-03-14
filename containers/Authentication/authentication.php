<?php
if (isset($_POST['btnLogin']) && isset($_POST['username']) && isset($_POST['password']) && $_POST['username']!="" && $_POST['password']!=""){
    require("./../../db_operations/db_conn.php");
    $username = $conn->real_escape_string(trim(@$_POST['username']));
    $hpass = md5($conn->real_escape_string(trim(@$_POST['password'])));
    $query = "SELECT username FROM adbt214_users WHERE username = '$username' AND password='$hpass';";
    $result = $conn->query($query);
    if ($result->num_rows==1){
        $user=$result->fetch_assoc();
        header('Location: ../../contact.php?'.$user['username']);
    } else {
        header('Location: ../../index.php?logFail');
    }
    require("./../../db_operations/db_close.php");
} else  {
    header('Location: ../../index.php?logEmpty');
}
?>
