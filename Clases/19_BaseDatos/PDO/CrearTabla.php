<?php
//1. Conectarse a la Base de datos
    include "conexion.php";
//2. Crear conexión PDO
try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$BD", $usuario, $password);
  
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    echo "Conexión exitosa a la Base de datos: ". $BD . "<br>";

    //3. Crear la base de datos con exec()
     
    $sql="CREATE TABLE usuario (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        pass VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        );";

    $conexion->exec($sql);
    echo "Creación exitosa de la tabla". "<br>";

  } catch(PDOException $error){
    echo "Error de conexión: ". $error->getMessage();
  }
// Cerrar la conexión
$conexion=null;
?>