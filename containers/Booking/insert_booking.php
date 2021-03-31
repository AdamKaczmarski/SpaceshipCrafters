<?php
/* This code inserts the booking data from request_booking.php
        It will be executed by jquery Ajax which will not reload the page
    */
session_start();

function scrapeData($conn,$data){
    $data = $conn->real_escape_string($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['title']) && isset($_POST['date']) && isset($_POST['time'])){
        @require('../../db_operations/db_conn.php');
        $title=scrapeData($conn,$_POST['title']);
        $date=scrapeData($conn,$_POST['date']);
        $time=scrapeData($conn,$_POST['time']);
        $query1 = "INSERT INTO adbt214_Bookings (booking_title, booking_date, booking_time) VALUES ('$title', '$date','$time');";
        $query2 = "INSERT INTO adbt214_Users_Bookings (bookingID, userID) VALUES ((
            SELECT IDBooking FROM adbt214_Bookings WHERE booking_title = '$title' AND booking_date = '$date' AND booking_time = '$time'
        ),(
            SELECT IDUser FROM adbt214_Users WHERE username='$_SESSION[loggedUser]'
        ));";
        $conn->query($query1);
        $conn->query($query2);
        @require('../../db_operations/db_close.php');
    } else {
        
    } 

?>