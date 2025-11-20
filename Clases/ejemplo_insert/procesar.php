<?php
// conexion valores del servidor
$server="";
$bd="";
$pass="";
$user="";
//2. Crear la cnexión
$conexion = mysqli_connect($servidor, $usuario, $password, $BD);

// verificar conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
  }
// consulta
//2. crear la instrucción sql en una variable
    $tabla="nobretabla";
    $c1=htmlspecialchars( $_POST["nombre"]);
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