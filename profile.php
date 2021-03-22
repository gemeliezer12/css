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
                <i class="fab fa-twitter btn-i logo"></i>
            </a>
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
                <i class="far fa-envelope btn-i"></i>
            </a>
            <a href="profile.php">
                <i style="color: rgb(30, 160, 240);" class="far fa-user-circle btn-i"></i>
            </a>
        </div>
        <?php
        include "assets/profile-option-sidebar.php";
        ?>
    </div>

    <div class="main-container main-profile">
        <a href="<?php echo $pictureProfiles; ?>">
            <img class="main-picture" src="<?php echo $pictureProfiles; ?>" alt="">
        </a>
    </div>
</body>
</html>