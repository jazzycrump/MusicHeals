
/*This code is the login and signup page for MusicHeals which allows the user to 
 login to music heals and if they do not have an account they may sign up for one.*/
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up and Login</title>
</head>

/*This method that will be utilized is a post method 
so that when information is entered it will post to the php page.*/
/* Use server[request method] to check for a form submission. */
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    /*Sends user information to login.php*/
    if (isset($_POST['login'])) {

        require 'Login Model.php';
    /*Sends user information to registration.php */
    }
    elseif (isset($_POST['register'])) {
        
        require 'Register Model.php';
        
    }
}
?>
<body>
  <div class="form">
      
      <ul>
        <li>><a href="#signup">Sign Up</a></li>
        <li> <a href="#login">Log In</a></li>
      </ul>
      
      

         <div id="login">   
          <h1>Welcome To Music Heals!</h1>
          
          <form action="Homepage.php" method="post" autocomplete="off">
              
          /* This is the login page and is the first page you will see on the Music Heals website.*/
          
            
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email"/>
          </div>
          
         
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          
          
          <button type='submit' name="login" />Log In</button>

        </div>
        <div id="signup">   
          <h1>Sign Up for MusicHeals</h1>
          
          <form action="Homepage.php" method="post" autocomplete="off">
          
          
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name='firstname'/>
            </div>
        
            
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
           
        

          
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          
          
          
            <label>
              Make up a Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
         
          
          <button type="submit"name="register" />Register</button>
</body>
</html>

