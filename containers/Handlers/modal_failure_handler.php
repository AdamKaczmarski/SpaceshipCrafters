<?php
function addButton($modalID){
    echo "<button type=\"button\" id=\"toggleFailModal\"style=\"display:none;\"data-bs-toggle=\"modal\" data-bs-target=\"#$modalID\">
    </button>";
    echo "<script id=\"toggleModalScript\">document.getElementById('toggleFailModal').click();
    document.getElementById('toggleFailModal').parentNode.removeChild(document.getElementById('toggleFailModal'));
    </script>";
}
if(isset($_GET['logEmpty'])){
    require('./containers/Modals/Failure/login_failed_empty.php');
    addButton('login-failEmptyModal');  
}
if(isset($_GET['logFail'])){
    require('./containers/Modals/Failure/login_failed_wrong.php');
    addButton('login-failWrongModal');  
}
if (isset($_GET['regTaken'])){
    require('./containers/Modals/Failure/registration_failed_taken.php');
    addButton('reg-failModal');  
}
if (isset($_GET['db_connFail'])){
    require('./containers/Modals/Failure/db_conn_failed.php');
    addButton('conn-failModal');
}
?>