<?php session_start();

require_once("../models/UserModel.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check to see if this is a login.
    if ($_POST['form-type'] == "login") {
        // Call up user model and login user.
        $user = User::login($_POST['username'], $_POST['password']);
        if ($user)  {
            header("location:http://localhost/Homepage.php");
        } else {
            header("location:http://localhost/Error.php");
        }
    } else {
        // Call up user model and register user.
        User::register( $_POST['user_name'],
                        $_POST['password'],
                        $_POST['first_name'],
                        $_POST['last_name']);
    }
    // Check to see if this is a register.
} else {
    header("location:http://localhost/UserModel.php");
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

