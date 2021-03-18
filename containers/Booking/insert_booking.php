<?php
session_start();
if (isset($_POST['title']) && isset($_POST['date']) && isset($_POST['time'])){
        @require('../../db_operations/db_conn.php');
        $query1 = "INSERT INTO adbt214_Bookings (booking_title, booking_date, booking_time) VALUES ('$_POST[title]', '$_POST[date]','$_POST[time]');";
        $query2 = "INSERT INTO adbt214_Users_Bookings (bookingID, userID) VALUES ((
            SELECT IDBooking FROM adbt214_Bookings WHERE booking_title = '$_POST[title]' AND booking_date = '$_POST[date]' AND booking_time = '$_POST[time]'
        ),(
            SELECT IDUser FROM adbt214_Users WHERE username='$_SESSION[loggedUser]'
        ));";
        $conn->query($query1);
        $conn->query($query2);
        @require('../../db_operations/db_close.php');
    } else {
        
    } 

?>