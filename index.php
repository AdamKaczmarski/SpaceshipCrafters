<?php
/**
 * / page that loads all the needed content
 */
require("./containers/Head/head.php");
?>
<body class="d-flex h-100 bg-dark text-white">
    <div class="container d-flex w-100 h-100 mx-auto p-3 text-center flex-column">
    <?php
    require("./containers/Navbar/navbar.php");
    require("./containers/Home/home.php");
    require("./containers/Footer/footer.php");
    require("./containers/Handlers/modal_failure_handler.php");
    require("./containers/Handlers/modal_success_handler.php");
    require("./containers/Login/login.php");
    require("./containers/Register/register.php");
    ?>
    </div>
    <script src="./js/deleteModal.js"></script>
</body>
</html>
