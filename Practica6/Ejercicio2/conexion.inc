<?php

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "capitales";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$resultados=mysqli_query($conn,"SELECT * from ciudades");

?>
