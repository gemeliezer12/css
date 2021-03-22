<?php
    include "assets/header.php";
    if(isset($_SESSION["idUsers"])){
        header("Location: home.php");
    }
?>
<body>
    <div class="container index">
        <p class="title">Happening now</p>
        <p class="desc">Join us today!</p>

        <a href="signup.php" class="btn-m btn-t">Sign up</a>
        <a href="login.php" class="btn-m btn-c">Log in</a>

    </div>
</body>
</html>