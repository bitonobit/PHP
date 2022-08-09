<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE TuDB";
if ($conn->query($sql) === TRUE) {
    echo "BD creada con éxito";
} else {
    echo "Error creando la BD: " . $conn->error;
}

$conn->close();
?>