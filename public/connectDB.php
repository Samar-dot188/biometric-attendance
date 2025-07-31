<?php
/* Database connection settings */
	$servername = "sql211.infinityfree.com";
    $username = "if0_39564165";		//put your phpmyadmin username.(default is "root")
    $password = "Samhridh2011";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "if0_39564165_biometricattendance";
    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>
