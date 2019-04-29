<?php session_start();
require_once("models/UserModel.php");

if (!User::isUserLoggedIn()) {
    header("location:http://localhost/index.php");
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Homepage</title>
    </head>
    <body>
        <?php $user = User::getSessionUser(); ?>
        <h1> Welcome Back </h1> <?php echo $user->getMHUserName(); ?>
        <br>
        <p> Thank you so much for coming back to join us at Music Heals. <br>
            Here at Music Heals our job is to help out our patients by giving them <br>
            an out of body experience through music. <br> <br> <br>
        Just click the button below to answer a few questions then kick off your shoes and enjoy your personalized playlist.</p>
        <form action="/Controller/Database/QDatabase.php" method='post'>
            <button type='submit'>Take the test</button>
        </form>
    </body>
</html>
