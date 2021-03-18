<?php
$host="smcse-stuproj00.city.ac.uk";
$user="adbt214";
$password = "200047951";

//$host = "localhost";
//$user = "root";
//$password ="";
$db = "adbt214";

$conn = @new mysqli($host,$user,$password,$db);
//$conn->set_charset('UTF-8');
if ($conn->connect_error) {
  header('Location: ../../index.php?db_connFail');
} else {
    
}
?>