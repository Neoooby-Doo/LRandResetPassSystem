<?php

// Attempt to establish a connection to the MySQL database
// mysqli_connect() takes four parameters: 
// - Hostname (localhost): The server where the database is located (in this case, the local machine)
// - Username (root): The MySQL username
// - Password (""): The password for the MySQL user (empty in this case)
// - Database name ("login_and_reg_db"): The name of the database you want to connect to

$conn = mysqli_connect("localhost", "root", "", "login_and_reg_db") 
        // If the connection fails, stop the script and display an error message
        or die("connection failed: " . mysqli_connect_error());

// The connection is successful if no error is triggered

?>
