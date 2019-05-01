<?php 
session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <base href="http://localhost">
        <title></title>
    </head>
    <body>
        <h2>Welcome to Music Heals</h2>
        <br>
        <h4> Please Login Below </h4>
            <form action="/Controller/DataController.php" method='post'>
            <input type="hidden" name="form-type" value="login" />
            <label for="username">User Name</label>
            <input id='username' name="username" type="text" />
            <br/>
            <label for='password'>Password</label>
            <input id='password' name="password" type="text" />
            <br>
            <button type='submit'>Login</button>
        </form>

        <h4>If you do not have a login please register below</h4>
        <form action="/Controller/DataController.php" method='post'>
            <input type="hidden" name="form-type" value="register"/>
            <label for="username">User Name</label>
            <input id='username' name="username" type="text" />
            <br/>
            <label for="username">First Name</label>
            <input id='username' name="username" type="text" />
            <br/>
            <label for="username">Last Name</label>
            <input id='username' name="username" type="text" />
            <br/>
            <label for='password'>Password</label>
            <input id='password' name="password" type="password" />
            <br>
            <button type='submit'>Register</button>
        </form>
    </body>
</html>
