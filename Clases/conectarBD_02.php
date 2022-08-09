<?php
// Conectar con una Base de datos
// Definir las variables de conexión
	$servidorBD = "localhost";  
    $usuarioBD = "root";                     
    $passwordBD = "";                             
    $nombreBD = "Espana";                      
 // Crear la conexión exclusivamente sin el nombre de la BD
    $conexion = mysqli_connect($servidorBD, $usuarioBD, $passwordBD);

    //Otra forma
    if (mysqli_connect_errno()){
        echo "Error de conexión con la Base de Datos";
        exit();
    }

    mysqli_select_db($conexion, $nombreBD) or die ("No se encuentra la basede datos");

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