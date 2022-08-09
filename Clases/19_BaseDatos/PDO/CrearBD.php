<?php
//1. creación de variables de conexión
    $servidor="localhost";
    $usuario="root";
    $password="";
//2. Crear la cnexión
try{
  $conexion = new PDO("mysql:host=$servidor", $usuario, $password);

  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//3. Crear la base de datos con exec() 
  $sql = "CREATE DATABASE miBDconPDO";
  $conexion->exec($sql);
  echo "Creación exitosa de la Base de datos". "<br>";

} catch(PDOException $error){
  echo "$sql Error: ". $error->getMessage();
}
  
  
//5. cerrar la conexion
  $conexion=null;
?>
