<?php
$host="";
$user="";
$password = "";

$db = "";

$conn = @new mysqli($host,$user,$password,$db);
if ($conn->connect_error) {
  header('Location: ../../index.php?db_connFail');
} else {
    
}
?>
