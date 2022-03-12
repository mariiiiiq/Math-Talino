<?php
// Database configuration
$host     = "remotemysql.com";
$dbuser = "roZjQ9CPdSZzot";
$dbpass = "Um1qQQ8Niq";
$dbname = "ZjQ9CPdSZz";
// Create database connection
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
 
