<?php $servername = "localhost";
$username = "dcenter";
$password = "shobdestiny";
$dbname = "dcenter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>