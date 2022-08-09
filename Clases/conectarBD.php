<?php
// Conectar con una Base de datos
// Definir las variables de conexión
	$servidorBD = "localhost";  
    $usuarioBD = "root";                     
    $passwordBD = "";                             
    $nombreBD = "Espana";                      
 // Craer la conexión
    $conexion = mysqli_connect($servidorBD, $usuarioBD, $passwordBD, $nombreBD) or die (mysqli_error());
    mysqli_set_charset($conexion, "utf8");		// Permite que se vean loas acentos y otros caracteres especiales
 //  crea una consulta
    $consulta= "SELECT * FROM COMUNIDADES";
    $resultado= mysqli_query($conexion, $consulta);

    $fila= mysqli_fetch_row($resultado);
    foreach ($fila as $key ) {
    		echo $key;
    }
// Cierra la conexion
    mysqli_close($conexion);
?>