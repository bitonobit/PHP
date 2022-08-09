<?php
//1. creación de variables de conexión
    $servidor="localhost";
    $usuario="root";
    $password="";
    $BD="miBDconObj";
//2. Crear la cnexión
$conexion = new mysqli($servidor, $usuario, $password, $BD);

// verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
  }
  echo "Conexión exitosa a la Base de datos: ". $BD . "<br>";
?>