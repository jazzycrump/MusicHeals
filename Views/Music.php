<?php session_start();
require_once("models/QuestionModel.php");

if (!Question::isQuestionAnswered()) {
    header("location:http://localhost/Error.php");
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
        <title>Music Play List</title>
    </head>
    <body>
       /** <?php $question = Question::getAnswer(); ?> */
        <h1> Welcome Back </h1> <?php echo $user->getAnswer(); ?>
        <br>
        <p> This is the play list that best fits your mood</p>
        <br>
        <?php 
        
        
        ?>
    </body>
</html>


