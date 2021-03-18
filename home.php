<?php
    include "assets/header.php";
?>
<body class="home">
    <div class="sidebar">
        <i class="fab fa-twitter btn-i"></i>
        <i class="fas fa-home btn-i"></i>
        <i class="far fa-bell btn-i"></i>
        <i class="far fa-envelope btn-i"></i>
        <i class="far fa-user-circle btn-i"></i>
        <i class="fas fa-bars btn-i"></i>
    </div>

    <div class="main-container">
        <div class="header">
            <p>Home</p>
        </div>
        <div class="post-box">
            <div class="profile">
                <img src="profile/default.jpg" alt="">
            </div>
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