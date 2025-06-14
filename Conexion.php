<?php
$servername = "sql113.infinityfree.com";
$database = "if0_39161751_rsdb";
$username = "if0_39161751";
$password = "Aleja20jandra25";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>