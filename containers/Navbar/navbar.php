<!-- Navbar made with Boostrap -->
<header class="mb-auto">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a  href="./index.php" class="navbar-brand">
            <img src="./assets/images/clipart-rocket-logo-1-transparent-white.png" alt=""width="30" height="30"
                class="d-inline-block align-top"/>
            Spaceship Crafters
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
            
                <?php 
                        if (isset($_SESSION['loggedUser'])) {
                            ?>
                            <span class="navbar-text mx-auto p-0">
                                <p class="mb-0">Welcome, <?php echo $_SESSION['loggedUser'] ?>! </p>
                            </span><?php    
                    }
                ?>
            
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a href="./index.php" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="navbar-item">
                    <a href="./about.php" class="nav-link">About</a>
                </li>
                <li class="navbar-item">
                    <a href="./contact.php" class="nav-link">Contact</a>
                </li>
                <?php 
                    if (!isset($_SESSION['loggedUser'])){
                        ?> 
                            <li class="navbar-item">
                                <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                            </li>
                        <?php
                    } else {
                        ?> 
                            <li class="navbar-item">
                                <a href="./booking.php" class="nav-link">Booking</a>
                            </li>
                            <li class="navbar-item">
                                <a href="./containers/Logout/logout.php" class="nav-link">Logout</a>
                            </li>
                        <?php
                    }
                ?>
                
            </ul>
        </div>
    </div>
</nav>
</header>