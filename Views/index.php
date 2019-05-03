
<?php session_start(); 
/** Author: Jasmine Crump */
?>
<html>
    <head>
        <meta charset="UTF-8">
         <base href="http://localhost:81">
        <title>Welcome</title>
    </head>
    <body>
        <h2>Welcome to Music Heals</h2>
        <br>
        <p>Here at Music Heals our job is to help out our patients by giving them an out of body experience through music. <br>
            For centuries music has been known to help relieve stress, assistance in helping people sleep, and be a gate way to help self expression.<br>
            <br>
            If you sign in below our staff here at Music Heals make it our job to assist you in finding a play list that best fits your mood to help get you through your day.<br>
            To get started either sign in below if you already have an account or below the login there is a registration form you can fill out to become a member.
            <br>
             Thanks so much for visiting and I hope you enjoy. </p>
        <h4> Please Login Below </h4>
            <form action="/Views/Homepage.php" method='post'>
            <input type="hidden" name="form-type" value="login"/>
            <label for="username">User Name</label>
            <input id='username' name="username" type="text" required/>
            <br/>
            <label for='password'>Password</label>
            <input id='password' name="password" type="text" required/>
            <br>
            <input type='submit'>
        </form>

        <h4>If you do not have a login please register below</h4>
        <form action="/Views/Homepage.php" method='post'>
            <input type="hidden" name="form-type" value="register"/>
            <label for="username">User Name</label>
            <input id='username' name="username" type="text" required/>
            <br/>
            <label for="username">First Name</label>
            <input id='firstname' name="firstname" type="text" required/>
            <br/>
            <label for="username">Last Name</label>
            <input id='lastname' name="lastname" type="text" required />
            <br/>
            <label for='password'>Password</label>
            <input id='password' name="password" type="password" required />
            <br>
            <input type='submit' value="Register"/>
        </form>
    </body>
</html>

