<?php
if (isset($_POST['btnLogin']) && isset($_POST['username']) && isset($_POST['password']) && $_POST['username']!="" && $_POST['password']!=""){
    require("./../../db_operations/db_conn.php");
    $username = $conn->real_escape_string(trim(@$_POST['username']));
    $hpass = md5($conn->real_escape_string(trim($_POST['password'])));
    echo "<script>console.log('$hpass')</script>";
    
    $query = "SELECT username FROM adbt214_users WHERE username = '$username' AND password='$hpass'";
    echo "<script>console.log('kurwa')</script>";
    if ($conn->query($query)){
        echo "<script>console.log('kurwa')</script>";
    }
    //$result = $conn->query($query);
    //$rows = $result->num_rows;
    /*if (mysqli_num_rows($result)){
        $user = $result->fetch_assoc();
        header('Location: ../../contact.php?'.$user['username']);
    } else {
        header('Location: ../../index.php?logFail&'.$user['username']);
    }*/
    require("./../../db_operations/db_close.php");
} else  {
    header('Location: ../../index.php?logEmpty');
}
?>
