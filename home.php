<?php
    include "assets/header.php";
    if(!isset($_SESSION["idUsers"])){
        header("Location: login.php");
    }
?>
<body class="home-body">
    <div class="sidebar">
        <div class="options">
            <a href="home.php">
                <i style="color: rgb(30, 160, 240);"  class="fas fa-home btn-i"></i>
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
                <i class="far fa-user-circle btn-i"></i>
            </a>
            <!-- <i class="fas fa-bars btn-i"></i> -->
        </div>
        <?php
        include "assets/profile-option-sidebar.php";
        ?>
    </div>

    <div class="main-container">
        <div class="header">
            <p>Home</p>
        </div>
        <div class="post-box">
            <a href="profile.php" class="profile">
                <img src="<?php echo $pictureProfiles; ?>" alt="">
            </a>
            <div class="post">
                <textarea class="post-input" type="text" placeholder="What's happening?"></textarea>
                <div>
                    <input type="submit" name="submit" class="btn-s btn-c" value="Post">
                </div>
            </div>
        </div>
    </div>
</body>
</html>