<?php
$host="";
$user="";
$password = "";

$db = "adbt214";

$conn = @new mysqli($host,$user,$password,$db);
if ($conn->connect_error) {
  header('Location: ../../index.php?db_connFail');
} else {
    
}
?>
