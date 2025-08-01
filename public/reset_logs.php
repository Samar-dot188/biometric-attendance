<?php
// Connect to database
require 'connectDB.php';

// === Security Check ===
$auth_code = "znktvEnW6C";  // <-- Change this to your own secret code
if (!isset($_GET['auth']) || $_GET['auth'] !== $auth_code) {
    http_response_code(403); // Forbidden
    echo "Unauthorized request.";
    exit();
}

// === Reset logs ===
$sql = "TRUNCATE TABLE users_logs";

if (mysqli_query($conn, $sql)) {
    echo "Users logs cleared successfully.";
} else {
    echo "Error clearing logs: " . mysqli_error($conn);
}
?>
