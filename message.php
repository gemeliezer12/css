<?php
    include "assets/header.php";
    if(!isset($_SESSION["idUsers"])){
        header("Location: login.php");
    }
?>
<body class="home-body notif">
    <div class="sidebar">
        <div class="options">
            <a href="home.php">
                <i class="fas fa-home btn-i"></i>
            </a>
            <a href="search.php">
                <i class="fas fa-search btn-i"></i>
            </a>
            <a href="notif.php">
                <i class="far fa-bell btn-i"></i>
            </a>
            <a href="message.php">
                <i style="color: rgb(30, 160, 240);"  class="far fa-envelope btn-i"></i>
            </a>
            <a href="profile.php">
                <i class="far fa-user-circle btn-i"></i>
            </a>
            <!-- <i class="fas fa-bars btn-i"></i> -->
        </div>
        <?php
        include "assets/profile-option-sidebar.php";
        ?>
    </div>

    <div class="main-container">
        <div class="div"></div>
    </div>
</body>
</html>