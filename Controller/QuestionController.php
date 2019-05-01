<?php 
session_start();

require_once("../Models/QuestionModel.php");

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    
    if ($_POST['form-type'] == "submit") {
        // Call up user model and login user.
        if ($submit)  {
            header("location:http://localhost/Music.html");
        } else {
            header("location:http://localhost/Error.php");
        }
    }
}