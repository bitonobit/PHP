<?php
//1. creación de variables de conexión
    $servidor="localhost";
    $usuario="root";
    $password="";
//2. Crear la cnexión
$conexion = new mysqli($servidor, $usuario, $password);

// verificar conexión
if ($conexion->connect_error) {
  die("Conexión fallida: " . $conexion->connect_error);
}
echo "Conexión exitosa a la Base de datos". "<br>";

  
  
//4. Crear la base de datos
  $sql = "CREATE DATABASE miBDconObj";
  if ( $conexion->query($sql) === TRUE) {
    echo "Base de datos miBD creada con éxito";
  } else {
    echo "Error creando la base de datos: " .$conexion->error;
  }
  
//5. cerrar la BD
  $conexion->close();
?>