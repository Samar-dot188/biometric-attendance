<?php
/* Database connection settings */
	$servername = "sql12.freesqldatabase.com";
    $username = "sql12792953";		//put your phpmyadmin username.(default is "root")
    $password = "4ZIUIbdUFw";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "sql12792953";

    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>
