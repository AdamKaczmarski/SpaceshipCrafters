<?php
function addButton($modalID){
    echo "<button type=\"button\" id=\"toggleFailModal\"style=\"display:none;\"data-bs-toggle=\"modal\" data-bs-target=\"#$modalID\">
    </button>";
    echo "<script id=\"toggleModalScript\">document.getElementById('toggleFailModal').click();
    document.getElementById('toggleFailModal').parentNode.removeChild(document.getElementById('toggleFailModal'));
    </script>";
}
if(isset($_GET['logEmpty'])){
    @include('./containers/Modals/Failure/login_failed_empty.php');
    addButton('login-failEmptyModal');  
}
if(isset($_GET['logFail'])){
    @include('./containers/Modals/Failure/login_failed_wrong.php');
    addButton('login-failWrongModal');  
}
if (isset($_GET['regTaken'])){
    @include('./containers/Modals/Failure/registration_failed_taken.php');
    addButton('reg-failModal');  
}
if (isset($_GET['db_connFail'])){
    @include('./containers/Modals/Failure/db_conn_failed.php');
    addButton('conn-failModal');
}
if(isset($_GET['regEmpty'])){
    @include('./containers/Modals/Failure/registration_failed_empty.php');
    addButton('register-failEmptyModal');  
}
if (isset($_GET['reg'])){
    @include('./containers/Register/register.php');
    addButton('register-failEmptyModal');  
}
if (isset($_GET['regWrongInputs'])){
    @include('./containers/Modals/Failure/registration_wrong_input.php');
    addButton('register-failWrongModal');
}
if (isset($_GET['regPassNMatch'])){
    include('./containers/Modals/Failure/registration_password_not_match.php');
    addButton('reg-pNModal');
}

?>