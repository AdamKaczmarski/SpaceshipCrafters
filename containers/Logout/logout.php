<?php
/**
 * It will unset the login session and head user to the index page
 */
session_start();
if (isset($_SESSION['loggedUser'])){
    echo "hello";
    unset($_SESSION['loggedUser']);
    header("Location: ./../../index.php");
} else {

}
?>
