<?php
/* Database connection settings */
	$servername = "sql305.infinityfree.com";
    $username = "if0_40436294";		//put your phpmyadmin username.(default is "root")
    $password = "j1Y8nflG9IA";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "if0_40436294_biometricattendance";

    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>
