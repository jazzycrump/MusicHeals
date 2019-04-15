<?php
/* Displays user information and some useful messages */

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
</head>

<body>
  <div class="form">

          <h1>Welcome</h1>
          
          
          <h2><?php echo $first_name.' '.$last_name; ?></h2>
          
          
          <p><?= $email ?></p>
          
          <button type = 'submit' name="logout"/>Log Out</button></a>

    </div>

</body>
</html>
