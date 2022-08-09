<?php
//1. Conectarse a la Base de datos
    include "conexion.php";
//2. Crear la conexión
try{
    $conexion = new PDO("mysql:host=$servidor;dbname=$BD", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //3. //2. crear la instrucción sql en una variable
    $tabla="usuario";
    $c1=1;
    $c2="María";
    $c3="890";
    $c4="$c2@gmail.com";
    $condicion="id=$c1";
    
    $sql = "UPDATE $tabla SET nombre='$c2', pass='$c3', email='$c4' WHERE $condicion;";
    
    //4. Ejecutarla
    $resultado=$conexion->prepare($sql);
    $resultado->execute();
    echo $resultado->rowCount() ." registros actualizados". "<br>";
    
    
    } catch(PDOException $error){
      echo "$sql Error: ". $error->getMessage();
    }
         
//5. cerrar la conexion
    $conexion=null;

?>