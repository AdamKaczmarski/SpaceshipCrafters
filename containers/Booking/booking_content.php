<?php 
if (isset($_SESSION['loggedUser'])){
    ?>
    <main class="px-3">
<div class="row">
    <div class="col">
        <h2 class="display-4">Book an appointement</h2>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-4">
        <p class="lead">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, corporis, praesentium voluptate itaque, repudiandae architecto non laboriosam quo minima delectus quis doloremque ipsa doloribus aliquid temporibus? Numquam aperiam aspernatur voluptate!
        </p>
        
    </div>
</div>
</main>

    <?php
} else {
    header("Location: ./index.php");
}
?>
