<?php
$conn =  new mysqli('localhost','root','','test');
if ($conn->connect_errno){
    echo $conn->connect_errno;
}
$query = "SELECT * FROM students";
if ($result = $conn->query($query)){
    while ($row =  $result->fetch_assoc()){
        echo "$row[first_name]"."<br>";
    }
}
?>