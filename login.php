<?php
 #include the `login.conn.php` for user login
 include 'login.conn.php';
 
 ?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | LRandResetPassSystem</title>
	<link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  </head>
  <body>

<!-- Navigation -->

<div class="top-bar">
  <div class="top-bar-left">
    <ul class="menu" data-responsive-menu="accordion">
     <a href="index">index.php</a>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="menu">
	   <?php
		  // Check if the user is logged in
if (isset($_SESSION['username'])) {
    // If the user is logged in, show the logout button
    echo "<li><a class='button secondary' href='logout'>Logout</a></li>";
} else {
    // If the user is not logged in, show the login form
    echo "<li><a class='button secondary' href='login'>Login</a></li>";
} ?>
      
    </ul>
  </div>
</div>
<!-- /Navigation -->

<br>

<div class="row">

  <div class="medium-6 large-5 columns">
 
    <img src="logo.png" alt="logo" title="logo">
	
   </div>


  <div class="row">
            
            <div class="medium-6 large-6 columns">
			<?php
								#show the Login Error
								echo $login_err; 
								
								?>
			<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" novalidate>
              <label>Email Address or Username:
                <input name="user_login" id="user_login" value="<?= $user_login; ?>" type="text" placeholder="email address or username ">
              </label>
             
              <label>
                Password:
                <input name="user_password" id="inputPassword" type="password" placeholder="password">
              </label>
			  
			  <input type="checkbox" onclick="myPwd()" value="" id="flexCheckDefault">
                                                  <label for="flexCheckDefault">
                                               show Password </label><br>
              <input type="submit" class="button secondary" name="submit" value="Log In">
			  </form>
			  
			  <p>
			  <small>Need an account? <a href="signup">Sign up!</a></small><br>
			 <small>Forgot your <a href="reset_password">Password</a></small><br>
			 </p>
            </div>
          </div>
		  
<footer>
  <div class="row expanded callout secondary">

   
    <div class="medium-6 columns">
      <ul class="menu float-right">
        <li class="menu-text">&copy; Made with 💖 in Dhaka, BD. </li>
      </ul>
    </div>
  </div>

</footer>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
	 <script>
         function myPwd() {
         var pwd = document.getElementById("inputPassword");
          if (pwd.type === "password") {
         pwd.type = "text";
        } else {
         pwd.type = "password";
        }
      }
     </script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
