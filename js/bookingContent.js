/**
 * This script loads the content for bookingContent and performs any database request in this panel.
 * It's made asynchronously which will not reload the page. see $(document).ready()
 * It will do validation in requests see bookingDateHandler(), bookingTimeHandler()
 * After submitting the form the database request is made via ajax which will not reload the page see insertBooking()
 * The functions are ES6 arrow functions, they work the same as function blabla(){}
 */
$(document).ready(()=>{
 $('#bookApp').click(()=>{
     $('#bookingContent').load('./containers/Booking/request_booking.php');
 })
 $('#bookHis').click(()=>{
     $('#bookingContent').load('./containers/Booking/booking_history.php');
 })

 });
 const bookingDateHandler =()=>{
     const date = $("#bookingDate").val();
     const date2= new Date(Date.parse($("#bookingDate").val()));
     
     if (date2.getDay()==6 || date2.getDay()==0){
        $("#bookingDate").removeClass("is-valid");
        $("#bookingDate").addClass("is-invalid");
     } else {  
         if (date2>Date.now()){
            $("#bookingDate").removeClass("is-invalid");
            $("#bookingDate").addClass("is-valid");
         }  else {
            $("#bookingDate").removeClass("is-valid");
            $("#bookingDate").addClass("is-invalid");
         }
     }
     $.ajax({
         url: "./containers/Booking/open_hours.php",
         type: "post",
         data: {
             date:date
         },
         dataType:'html',
         success: (response)=>{
            $('#bookingTime').empty();
            $('#bookingTime').append(response);
         }
     })
     if ( $("#bookingDate").hasClass("is-valid")){
        $('#bookingTime').removeAttr("disabled");
     } else {
        $('#bookingTime').attr("disabled",true);
        bookingTimeHandler();
     }

     
 }

 const bookingTimeHandler=()=>{
    if($('#bookingTime').prop("disabled")){
        $('#btnApp').attr("disabled",true);
    } else {
        $('#btnApp').removeAttr("disabled");
    }
    
 }

 const insertBooking=()=>{
    if ($('#bookingTitle').val().length>5 && $('#bookingTime').val().length>1 && $('#bookingDate').val().length>1){
        let title = $('#bookingTitle').val();
        let date = $('#bookingDate').val();
        let time = $('#bookingTime').val();
        $.ajax({
            url:"./containers/Booking/insert_booking.php",
            type:'post',
            data:{
                title:title,
                date:date,
                time:time
            },
            datatype:'json',
            success: function(){
                $('#bookingContent').load('./containers/Booking/booking_history.php');
            }
            
        });
    }
 }