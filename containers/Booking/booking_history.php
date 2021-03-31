<?php
    session_start();
    if(isset($_SESSION['loggedUser'])){
        
        require('../../db_operations/db_conn.php');
        $username=$_SESSION['loggedUser'];
        $queryFuture = "SELECT B.* FROM adbt214_Bookings B INNER JOIN adbt214_Users_Bookings UB ON UB.bookingID = B.IDBooking INNER JOIN adbt214_Users U ON U.IDUser = UB.userID WHERE U.username='$username' AND B.booking_date>=CURRENT_DATE() ORDER BY booking_date DESC, booking_time DESC";

        $queryPast = "SELECT B.* FROM adbt214_Bookings B 
        INNER JOIN adbt214_Users_Bookings UB ON UB.bookingID = B.IDBooking 
        INNER JOIN adbt214_Users U ON U.IDUser = UB.userID
        WHERE U.username='$username' AND B.booking_date<CURRENT_DATE()
        ORDER BY booking_date DESC, booking_time DESC;";

        if ($result = $conn->query($queryFuture)){
            if($result->num_rows>0){
                ?>
            <table class="table table-hover" style="background-color:rgba(255,255,255,0.2); color:#DFA906">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>
            <tbody style="color:#FCC107">
            <?php
            $id=1;
                while ($row = $result->fetch_assoc()){
                    $time = substr($row['booking_time'],0,-3);
                    echo <<<TABLEROW
                    <tr>
                        <th scope="row">$id</th>
                        <th>$row[booking_title]</th>
                        <th>$row[booking_date]</th>
                        <th>$time</th>
                    </tr>
TABLEROW;
                    $id++;
                }
                if($result=$conn->query($queryPast)){
                    if ($result->num_rows>0){
                        while ($row = $result->fetch_assoc()){
                            $time = substr($row['booking_time'],0,-3);
                            echo <<<TABLEROW
                            <tr style="color:#bfa75c">
                                <th scope="row">$id</th>
                                <th>$row[booking_title]</th>
                                <th>$row[booking_date]</th>
                                <th>$time</th>
                            </tr>
        TABLEROW;
                    $id++;
                    }
                }
            }
                ?>
                
            </tbody>
            </table><?php
            } else {
                ?><p class="text-lead display-6">No appointments have been requested.
                Please use the form below to request an appointment.</p><?php
            }
            $result->free_result();
        }
        ?> 
            
        <?php
        require('../../db_operations/db_close.php');
    }
?>