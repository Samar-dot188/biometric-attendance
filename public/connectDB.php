<?php
/* Database connection settings */
	$servername = "biometric-attendance-gosaliasamar-856e.d.aivencloud.com";
    $username = "avnadmin";		//put your phpmyadmin username.(default is "root")
    $password = "AVNS_0ayC5qViELEnK-G8qRN";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "defaultdb";

    
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>
