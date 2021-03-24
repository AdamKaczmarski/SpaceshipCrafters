<?php
session_start();

function scrapeData($conn,$data){
    $data = $conn->real_escape_string($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    $data = strip_tags($data);
    return $data;
}

if (isset($_POST['title']) && isset($_POST['date']) && isset($_POST['time'])){
        @require('../../db_operations/db_conn.php');
        $title=scrapeData($conn,$_POST['title']);
        $date=scrapeData($conn,$_POST['date']);
        $time=scrapeData($conn,$_POST['time']);
        //$date2 = date("Y-m-d",strtotime($date);
        if(date("Y-m-d",strtotime($date))>date("Y-m-d") && date("l",strtotime($date))!="Saturday" && date("l",strtotime($date)!="Sunday")){
            $query1 = "INSERT INTO adbt214_Bookings (booking_title, booking_date, booking_time) VALUES ('$title', '$date','$time');";
            $query2 = "INSERT INTO adbt214_Users_Bookings (bookingID, userID) VALUES ((
                SELECT IDBooking FROM adbt214_Bookings WHERE booking_title = '$title' AND booking_date = '$date' AND booking_time = '$time'
            ),(
                SELECT IDUser FROM adbt214_Users WHERE username='$_SESSION[loggedUser]'
            ));";
            $conn->query($query1);
            $conn->query($query2);
            @require('../../db_operations/db_close.php');
        }
    } else {
        if(strpos($_POST['path'],"?")>0){
            $newpath = str_replace(substr($_POST['path'],strpos($_POST['path'],"?")),"",$_POST['path']);
            echo $newpath;
            header("Location: ".$newpath."?wrongDate");
        } else {
            header("Location: ".$_POST['path']."?wrongDate");
        }
    } 

?>