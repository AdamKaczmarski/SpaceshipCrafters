<!-- This file loads the content for contact page -->
<main class="px-3">
<div class="row">
    <div class="col">
        <h2 class="display-4">Contact us</h2>
    </div>
</div>
<div class="row justify-content-center text-justify">
    <div class="col-lg-4">
        <p class="lead" style="text-align:left;">
            Email: contact@spaceshipcrafters.com<br>
            Phone Number: 00 44 7470 123345<br>
            Address: 1 Rocket Rd, Hawthorne, CA 90250, USA<br>
            <br>
            Opening Hours:<br>
            Monday: 9:00-16:00<br>
            Tuesday: 9:00-16:00<br>
            Wednesday: 9:00-16:00<br>
            Thursday: 9:00-16:00<br>
            Friday: 9:00-16:00
        </p>
        <?php if (!isset($_SESSION['loggedUser'])){
           ?> 
           <p class="text-lead">You can also use our form to contact us, you're only needed to register!</p>
           <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
         <?php } else { ?>
            <a href="./booking.php" ><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Booking</button></a>
         <?php } ?>
    </div>
    <div class="col-lg-6">
        <div class="ratio ratio-4x3 my-3">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13243.179055458959!2d-118.3280263!3d33.9206814!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5589bf4232c10232!2sSpacex!5e0!3m2!1spl!2spl!4v1615569799831!5m2!1spl!2spl"  style="border:0;"  loading="lazy"></iframe>

        </div>
    </div>
</div>
</main>
