<?php
//1. Conectarse a la Base de datos
    include "conexion.php";
//2. crear la instrucción sql en una variable
     
    $sql="CREATE TABLE usuario (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        pass VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        );";
    if ( $conexion->query($sql)===TRUE) {
    echo "Tabla creada correctamente";
    } else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
    }

$conexion->close();
?>