<?php
$servername = "itglance.org";
$username = "itglarid_docsea";
$password = "doc@sea123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
