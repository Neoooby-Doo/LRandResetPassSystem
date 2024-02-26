<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paste | Ghost Pastebin</title>
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
     
    </ul>
  </div>

</div>
<!-- /Navigation -->

<br>


  <div class="row">
            
            <div class="large-10 columns">
			<?php

// Get the post ID from the URL
$paste_id = $_GET['id'];

// Connect to the database
require_once 'config.php';

// Get the post details from the database
$sql = "SELECT * FROM pastes WHERE paste_id = $paste_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // The post exists
    $row = $result->fetch_assoc();

    // Display the post details
    echo '<h2>' . $row['title'] . '</h2>';
    echo '<p class="subheader">Pasted by <b>' . $row['pasted_by'] . '</b> on ' . $row['date'] . '</p>';
    echo '<pre><code class="language-' . $row['language'] . '">' . htmlspecialchars($row['content']) . '</code></pre>';


} else {
    // The post does not exist
    echo 'The paste does not exist.';
}

// Close the database connection
$conn->close();

?>
			
            </div>
          </div>
		  
<footer>
  <div class="row expanded callout secondary">

   
    <div class="medium-6 columns">
      <ul class="menu float-right">
        <li class="menu-text">Hosted on <a href="index.php"><img src="assets/img/logo.png"></a></li>
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
