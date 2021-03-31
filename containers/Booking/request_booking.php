<!--  This code loads the booking form for the user it's going to be put in div with id bookingContent
        It will be loaded via jquery Ajax which will not reload the page but just the div
     -->
<form role="form" method="post" class="align-items-center w-50 mx-auto"">
    <div class="col pt-3">
            <label for="bookingTitle">Please shortly describe your needs for the appointment</label>
            <input type="text" class="form-control" name="bookingTitle" id="bookingTitle">
    </div>
    <div class="row">
        <div class="col-lg-6  col-md-12 pt-3">
                <label for="bookingDate">Please select the date, <br> We only meet from Monday to Friday</label>
                <input type="date" class="form-control" name="bookingDate" id="bookingDate" onchange="bookingDateHandler()">
        </div>
        <div class="col-lg-6  col-md-12 pt-3">
                <label for="bookingTime">Please select the time, <br> Only 4 time slots are available</label>
                <select name="bookingTime" id="bookingTime" class="form-select" disabled onchange="bookingTimeHandler()">
                    <option selected>Choose the time</option>
                </select>
        </div>
        <div class="row">
            <div class="col  pt-3">
                <input type="text" style="display:none" name="path" value="<?php echo $_SERVER['PHP_SELF'] ?>">
                <button type="button" name="btnApp" id="btnApp" class="btn btn-primary" onclick="insertBooking()" disabled>Request an appointment</button>
            </div>
        </div>
    </div>
</form>



