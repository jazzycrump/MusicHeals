<?php session_start(); ?>
<!DOCTYPE html>
<!--
This error page will be used if a potential Music Heals user tries to login and
 does not have an account under the username.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Survey</title>
    </head>

<body>
 <form>
 <input type="radio" name="question1" <?php if (isset($question1) && $question1=="yes") echo "checked";?> value="yes">Yes
  <input type="radio" name="question1" <?php if (isset($question1) && $question1=="no") echo "checked";?> value="no">No


  <input type="radio" name="question2" <?php if (isset($question2) && $question2=="yes") echo "checked";?> value="yes">Yes
  <input type="radio" name="question2" <?php if (isset($question2) && $question2=="no") echo "checked";?> value="no">No
  
 
 <input type = "submit" name="submit" value="Submit">
 </form>
</body>
