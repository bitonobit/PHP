<?php
//1. Conectarse a la Base de datos
    include "conexion.php";
//2. crear la instrucción sql en una variable
    $tabla="usuario";
    $c1=1;
    $c2="María";
    $c3="890";
    $c4="$c2@gmail.com";
    $condicion="id=$c1";
    
    $sql = "UPDATE $tabla SET nombre='$c2', pass='$c3', email='$c4' WHERE $condicion;";

    if (mysqli_query($conexion, $sql)) {
    echo "Actualizado correctamente";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

mysqli_close($conexion);
?>