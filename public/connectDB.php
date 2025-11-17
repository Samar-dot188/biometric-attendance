<?php
$host = "biometric-attendance-gosaliasamar-856e.d.aivencloud.com";
$port = 10249;
$user = "avnadmin";
$pass = "AVNS_0ayC5qViELEnK-G8qRN";
$db   = "defaultdb";

// SSL certificate from Aiven
$ssl_ca = __DIR__ . "/ca.pem";

$conn = mysqli_init();

// Enable SSL for Aiven
mysqli_ssl_set($conn, NULL, NULL, $ssl_ca, NULL, NULL);

// Connect with port
if (!mysqli_real_connect(
        $conn,
        $host,
        $user,
        $pass,
        $db,
        $port,
        NULL,
        MYSQLI_CLIENT_SSL
    )) {

    die("Connection failed: " . mysqli_connect_error());
}
?>
