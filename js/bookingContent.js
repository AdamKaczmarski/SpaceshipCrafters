$(document).ready(()=>{
 $('#bookApp').click(()=>{
     $('#bookingContent').load('./containers/Booking/request_booking.php');
 })
 $('#bookHis').click(()=>{
     $('#bookingContent').load('./containers/Booking/booking_history.php');
     //$('#bookingContent').html('elo');
 })
 });
 
 const bookingDateHandler =()=>{
     const date = $("#bookingDate").val();
     $.ajax({
         url: "./containers/Booking/open_hours.php",
         type: "post",
         data: {
             date:date
         },
         dataType:'html',
         success: (response)=>{
             $('#bookingTime').append(response);
         }
     })
     $('#bookingTime').removeAttr("disabled");
 }

 const bookingTimeHandler=()=>{
    $('#btnApp').removeAttr("disabled");
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