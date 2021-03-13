<?php
$host="smcse-stuproj00.city.ac.uk";
$user="adbt214";
$password = "20004d7951";
$db = "adbt214";

$conn = @new mysqli($host,$user,$password,$db);
//$conn->set_charset('UTF-8');
if ($conn->connect_error) {
  header('Location: ../../index.php?db_connFail');
} else {
    echo"succesS";
}
?>