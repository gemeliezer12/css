<?php
session_start();
include "dbh.inc.php";
if(isset($_POST["submit"])){
    $emailUsername = $_POST["mailuid"];
    $password = $_POST["pwd"];
    if(empty($emailUsername) || empty($password)){
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else{
        $query = $pdo->prepare("SELECT * FROM users WHERE usernameUsers=? OR emailUsers=?;");
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query->bindValue(1, $emailUsername);
        $query->bindValue(2, $emailUsername);

        $query->execute();

        $rowCount = $query->rowCount();

        if($rowCount > 0){
            $row = $query->fetch();
            $pwdCheck = password_verify($password, $row["passwordUsers"]);
            
            if($pwdCheck == false){
                header("Location: ../login.php?error=wrongpwd");
                exit();
            }
            elseif($pwdCheck == true){
                session_start();
                $_SESSION["idUsers"] = $row["idUsers"];
                $_SESSION["usernameUsers"] = $row["usernmeUsers"];

                header("Location: ../home.php?login=success");
                exit();
            }
            else{
                header("Location: ../login.php?error=wrongpwd");
                exit();
            }
        }
        else{
            header("Location: ../login.php?error=nouser");
            exit();
        }
    }
}