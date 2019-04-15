<?php
/* This page will connect with the sql database to retrieve email, usernames and passwords.*/
/* Use escapse string to .*/
$email = $mysql->($_POST['email']);
$result = $mysql->query("SELECT * FROM users WHERE email='$email'");
/* Check to see if the email is in the sql database*/
if ( $result->num_rows == 0 ){ 
    $_SESSION['message'] = "User with that email doesn't exist!";
}
/*If the email is found in the datbase check the password to make sure 
the password is correct.*/
else {
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['logged_in'] = true;
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
    }
}

