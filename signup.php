<?php
    include "assets/header.php";
?>
<body>
    <div class="container">
        <form action="inc/signup.inc.php" method="POST">
            <p>Sign up now</p>
            <div class="lbl-input">
                <label for="uid">Username</label>
                <input name="uid" type="text">
            </div>
            <div class="lbl-input">
                <label for="mail">Email</label>
                <input name="mail" type="text">
            </div>
            <div class="lbl-input">
                <label for="pwd">Password</label>
                <input name="pwd" type="password">
            </div>
            <div class="lbl-input">
                <label for="pwd-repeat">Repeat Password</label>
                <input name="pwd-repeat" type="password">
            </div>
            <input type="submit" name="submit" class="btn-m btn-c" value="Sign up in">
            <div class="option">
                <a href="">Forgot password</a>
                <span>·</span>
                <a href="login.php">Log in now!</a>
            </div>
        </form>
    </div>
</body>
</html>