<?php
session_start();
include "library/user.class.php";
include "library/profile.class.php";
include "dbh.php";

$user = new User;
$profile = new Profile;
if(isset($_SESSION["idUsers"])){
    $id = $_SESSION["idUsers"];
    $userData = $user->fetchData($id);
    $profileData = $profile->fetchData($id);

    $pictureProfiles = $profileData["pictureProfiles"];

    if(empty($pictureProfiles)){
        $pictureProfiles = "profile/default.jpg";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/library/style.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>

<?php