<?php
/**
 * Simple conneciton to the database
 */
$host="smcse-stuproj00.city.ac.uk";
$user="adbt214";
$password = "200047951";

$db = "adbt214";

$conn = @new mysqli($host,$user,$password,$db);
if ($conn->connect_error) {
  header('Location: ../../index.php?db_connFail');
} else {
    
}
?>
