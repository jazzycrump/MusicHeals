<?php
/** Author: Jasmine Crump */
require_once("../Model/UserModel2.php");

$user = new MHUserModel2();

if($_POST['form-type'] == "login"){

    if($user->userExists($_POST['username'], $_POST['password'])){

        $profile = $user->login($_POST['username'], $_POST['password']);
        $user->setUsername($profile['username']);
        $user->setPassword($profile['password']);
        $user->setSessionUser($user);
        $_SESSION['username'] = $_POST['username'];

    }else{
        header("location:http://localhost:81/Views/index.php");
    }

}
else if($_POST['form-type'] == "register"){
    $user->register($_POST['username'],$_POST['password'],$_POST['firstname'],$_POST['lastname']);
    $user->setFirstName($_POST['firstname']);
    $user->setLastName($_POST['lastname']);
    $user->setUsername($_POST['username']);
    $user->setPassword($_POST['password']);
    $user->setSessionUser($user);
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
    </head>
    <body>
        <form action="/Database/QDatabase.php" method='post'>
            <h1> Welcome Back </h1> <h1><?php echo $user->getUserName(); ?></h1>
            <br>
            <p> Thank you so much for coming back to join us at Music Heals. <br>
                <br>
            Just click the button below to answer a few questions then kick off your shoes and enjoy your personalized play list.</p>

            <input type='submit' value="Take the test" />
        </form>
    </body>
</html>
