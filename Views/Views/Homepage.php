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
        <p> </p>
    </body>
</html>
