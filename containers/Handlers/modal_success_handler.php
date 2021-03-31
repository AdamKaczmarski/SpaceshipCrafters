<?php
/**
 * This code handles every success that can happen eg. successfull registration
 * This will add an invisible button(from failure handlers) that will toggle the modal
 */


if (isset($_GET['regSuccess'])){
    @include("./containers/Modals/Success/registration_success.php");
    addButton('regSuccess');
}
?>
