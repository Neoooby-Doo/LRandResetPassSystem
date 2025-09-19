
<?php

/**
 * @repo:      https://github.com/Neoooby-Doo/login-and-registration-system/ The GitHub Repo.
   @author:    Shakhawat Hossain (htps://github.com/Neoooby-Doo/) <sakhwt.hssain@gmail.com>
 * @license:   MIT License

*/
 
session_start();


 /* If user is not logged in, redirect to `login.php` */

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login';" . "</script>";
  exit;
}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | LRandResetPassSystem</title>
	<link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>

<!-- and it's easy to individually load additional languages -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/languages/go.min.js"></script>

<script>hljs.highlightAll();</script>
  </head>
  <body>

<!-- Navigation -->

<div class="top-bar">
  <div class="top-bar-left">
    <ul class="menu" data-responsive-menu="accordion">
      <a href="index.php">index.php</a>
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
    
    <?php
		  // Check if the user is logged in
if (isset($_SESSION['username'])) {
    // If the user is logged in, show the welcome message
    echo "<h1>welcome, <b>{$_SESSION['username']}</b></h1>";

} else {
    // If the user is not logged in, 
    echo " ";
} ?>
   
	
	<p class="subheader">Get ready for some excitement! </p>					
  
  </div>


  <div class="row">
            
            <!-- paste here -->
			
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
      $(document).foundation();
    </script>
  </body>
</html>
