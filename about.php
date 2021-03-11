<?php
require("./containers/Head/head.php");
?>
<body class="d-flex h-100 bg-dark text-white">
    <div class="container d-flex w-100 h-100 mx-auto p-3 text-center flex-column">
    <?php
    require("./containers/Navbar/navbar.php");
    //require("./containers/About/about_content.php"); ?>
    <main>
    <h1 class="display-3">Who are we?</h1>
        <p class="lead display-6">
            We are the inventors, makers and the largest distributor of spaceships on Earth
        </p>
    </main>
    <div class="carousel carousel-dark slide " data-bs-ride="carousel" id="slideShow">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slideShow" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#slideShow" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#slideShow" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1000">
                <img src="./assets/images/pic_2.jpg" class="d-block w-100" alt="Pic 2" />
                <!-- <div class="carousel-item active" style="background-image:url(./assets/images/pic_2.jpg);"></div> -->
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 1 label</h5>
                    <p>Some text for it</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="./assets/images/pic_3.jpg" class="d-block w-100" alt="Pic 3"/>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 2 label</h5>
                    <p>Some text for it</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/pic_1.jpg" class="d-block w-100" alt="Pic 1"  id="adjustimg"/>
                
                <div class="carousel-caption d-none d-md-block text-white">
                    <h5 >Our stunning interior</h5>
                    <p>We have the best interior designer to make your dream come true</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slideShow" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"> Previous  </span>
        </button>
            
        <button class="carousel-control-next" type="button" data-bs-target="#slideShow" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"> Next </span>
        </button>
    </div>
    <?php
    require('./containers/Footer/footer.php');  
    ?>
    </div>
</body>
</html>
