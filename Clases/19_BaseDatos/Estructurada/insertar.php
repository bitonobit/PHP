<?php
//1. Conectarse a la Base de datos
    include "conexion.php";
//2. crear la instrucción sql en una variable
    $tabla="usuario";
    $c1="1";
    $c2="Candy";
    $c3="123";
    $c4="bitonobit@gmail.com";

    $sql = "INSERT INTO $tabla VALUES ('$c1', '$c2', '$c3', '$c4',  current_timestamp())";

    if (mysqli_query($conexion, $sql)) {
    echo "Insertado correctamente";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

mysqli_close($conexion);
?>