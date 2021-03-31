<?php
/* This code is used to display time slots for the user while making a booking request
The company only allows for 4 time slots a day, since discussing rocket production takes a lot of time.
This query checks if time slots are available and then prints those which are not taken */
session_start();
if (isset($_SESSION['loggedUser'])){
    @require('../../db_operations/db_conn.php');
    $query = "SELECT booking_time FROM adbt214_Bookings WHERE booking_date='$_POST[date]'";
    $times = array(0=>'10:00:00',1=>'12:00:00',2=>'14:00:00',3=>'16:00:00');
    if ($result=$conn->query($query)){
            while ($row = $result->fetch_assoc()){
                if($row['booking_time']=='10:00:00') $times[0]=null;
                if($row['booking_time']=='12:00:00') $times[1]=null;
                if($row['booking_time']=='14:00:00') $times[2]=null;
                if($row['booking_time']=='16:00:00') $times[3]=null;
            }
            foreach($times as $key => $value){
                if ($value!=null){
                    echo '<option value="'.$value.'">'.substr($value,0,-3).'</option>';
                }
            }
            $result->free_result();
    }
    @require('../../db_operations/db_close.php');
}
?>