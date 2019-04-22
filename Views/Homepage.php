<?php session_start();
require_once("models/UserModel.php");
if (!User::isUserLoggedIn()) {
    header("location:http://localhost/index.php");
}
?>
<!DOCTYPE html>



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
