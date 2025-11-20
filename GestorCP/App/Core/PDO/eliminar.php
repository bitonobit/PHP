<?php
//1. Conectarse a la Base de datos
    include "conexion.php";
//2. Crear la conexión
try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$BD", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //3.Crear la instrucción sql en una variable
    $tabla="usuario";
    $condicion="id=1";
    $sql = "DELETE FROM $tabla WHERE $condicion;";

    $conexion->exec($sql);
    echo "Creación exitosa de la Base de datos". "<br>";
    
    } catch(PDOException $error){
      echo "$sql Error: ". $error->getMessage();
    }
         
    //5. cerrar la conexion
      $conexion=null;
  
   
?>