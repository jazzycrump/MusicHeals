<?php session_start();

require_once("../models/QuestionModel.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    if ($_POST['form-type'] == "submit") {
        // Call up user model and login user.
        $question1 = Answer::login($_POST['username'], $_POST['password']);
        if ($submit)  {
            header("location:http://localhost/Music.php");
        } else {
            header("location:http://localhost/Error.php");
        }
    } else {
  