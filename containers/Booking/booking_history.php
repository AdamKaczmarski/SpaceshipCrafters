<?php
    session_start();
    if(isset($_SESSION['loggedUser'])){
        
        require('../../db_operations/db_conn.php');
        $username=$_SESSION['loggedUser'];
        $query = "SELECT B.* FROM adbt214_Bookings B 
        INNER JOIN adbt214_Users_Bookings UB ON UB.bookingID = B.IDBooking 
        INNER JOIN adbt214_Users U ON U.IDUser = UB.userID
        WHERE U.username='$username';";
        if ($result = $conn->query($query)){
            if($result->num_rows>0){
                ?>
            <table class="table text-white  table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>
            <?php
                while ($row = $result->fetch_assoc()){
                    $time = substr($row['booking_time'],0,-3);
                    echo <<<TABLEROW
                    <tr class="text-white">
                        <th scope="row">$row[IDbooking]</th>
                        <th>$row[booking_title]</th>
                        <th>$row[booking_date]</th>
                        <th>$time</th>
                    </tr>
TABLEROW;
                }
                ?>
                </tbody>
            </table><?php
            } else {
                ?><p class="text-lead display-6">No appointments have been requested.
                Please use the form below to request an appointment.</p><?php
            }
        }
        ?> 
            
        <?php
        require('../../db_operations/db_close.php');
    }
?>