<?php



if (isset($_GET['regSuccess'])){
    @include("./containers/Modals/Success/registration_success.php");
    addButton('regSuccess');
}
?>
