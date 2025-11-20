<?php
//1. creación de variables de conexión
    $servidor="localhost";
    $usuario="root";
    $password="";
    $BD="miBD";
//2. Crear la cnexión
$conexion = mysqli_connect($servidor, $usuario, $password, $BD);

// verificar conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
  }
  // echo "Conexión exitosa a la Base de datos: ". $BD . "<br>";
?>