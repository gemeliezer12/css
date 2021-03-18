<?php
    include "assets/header.php";
?>
<body>
    <div class="container">
        <form action="inc/login.inc.php" method="POST">
            <p>Login in now</p>
            <div class="lbl-input">
                <label for="mailuid">Email/Username</label>
                <input name="mailuid" type="text">
            </div>
            <div class="lbl-input">
                <label for="pwd">Password</label>
                <input name="pwd" type="password">
            </div>
            <input type="submit" name="submit" class="btn-m btn-c" value="Log in">
            <div class="option">
                <a href="">Forgot password</a>
                <span>·</span>
                <a href="signup.php">Sign up now!</a>
            </div>
        </form>
    </div>
</body>
</html>