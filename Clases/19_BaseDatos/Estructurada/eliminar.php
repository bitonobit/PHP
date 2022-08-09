<?php
//1. Conectarse a la Base de datos
    include "conexion.php";
//2. crear la instrucción sql en una variable
    $tabla="usuario";
    $condicion="id=1";
    $sql = "DELETE FROM $tabla WHERE $condicion;";

    if (mysqli_query($conexion, $sql)) {
    echo "Eliminado correctamente";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

mysqli_close($conexion);
?>