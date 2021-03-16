<?php
session_start();
if (isset($_SESSION['loggedUser'])){
    echo "hello";
    unset($_SESSION['loggedUser']);
    header("Location: ./../../index.php");
} else {

}
?>
