 <!--
     Title: jQuery 3.6.0
     Authors: The jQuery Team
     Date: Initial Release : 2006, Used Version March 2021
     Availability: https://jquery.com/ / https://github.com/jquery
  -->
<script src="./js/jquery-3.6.0.js"></script>
<script src="./js/bookingContent.js"></script>
<?php 
/**
 * Just content for the booking it has 2 links which are linked to Ajax(jquery) and will load demanded content in #bookingContent
 */
if (isset($_SESSION['loggedUser'])){
    ?>
    <main class="px-3">
    
    
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-3 mx-3">
                <a href="#" id="bookApp" class="bkA"><h2>Available Appointments</h2></a>
            </div>
            <div class="col-md-3 mx-3">
                <a href="#" id="bookHis" class="bkA"><h2>Requested Appointments</h2></a>
            </div>
        </div>
        <div id="bookingContent" class="pt-10">
            
        </div>
    </div>
    </main>
    

    <?php
} else {
    header("Location: ./index.php");
}
?>
