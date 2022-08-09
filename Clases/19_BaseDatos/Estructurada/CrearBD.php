<?php
//1. creación de variables de conexión
    $servidor="localhost";
    $usuario="root";
    $password="";
//2. Crear la cnexión
$conexion = mysqli_connect($servidor, $usuario, $password);

//3. verificar conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
  }
  
//4. Crear la base de datos
  $sql = "CREATE DATABASE miBD";
  if (mysqli_query($conexion, $sql)) {
    echo "Base de datos miBD creada con éxito";
  } else {
    echo "Error creando la base de datos: " . mysqli_error($conexion);
  }
  
//5. cerrar la BD
  mysqli_close($conexion);
?>