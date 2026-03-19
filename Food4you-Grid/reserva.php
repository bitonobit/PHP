<?php
// Definir las variables de conexión
	$servidorBD = "localhost";  
    $BDname = "4703615_food4you";
    $usuarioBD = "root";                     
    $passwordBD = "";     
	// $servidorBD = "fdb1031.runhosting.com";  
    // $BDname = "4703615_food4you";
    // $usuarioBD = "4703615_food4you";                     
    // $passwordBD = "BDfood4you*";     
    // Crear la conexión
    $conexion = new mysqli($servidorBD, $usuarioBD, $passwordBD, $BDname);
    // Verificar la conexión    
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    // Procesar el formulario cuando se envíe
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        $fecha = htmlspecialchars($_POST['fecha']);
        $hora = htmlspecialchars($_POST['hora']);
        $comensales = htmlspecialchars($_POST['comensales']);
        // Insertar los datos en la base de datos
        $sql = "INSERT INTO reservas (nombre, email, fecha, hora, comensales) VALUES ('$nombre', '$email', '$fecha', '$hora', '$comensales')";
        if ($conexion->query($sql) === TRUE) {
            echo "Reserva realizada con éxito.";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
    }   
?>