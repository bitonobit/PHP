<?php
//1. Conectar a la base de datos
    include "conexion.php";
//2. Crear la consulta
    $tabla="usuario";
    $c1="id";
    $c2="nombre";
    $c3="pass";
    $c4="email";
    $sql = "SELECT * FROM $tabla";
//3. Hacer la consulta
    $resultado =$conexion->query($sql);
//4. Si vuelven registros de la consulta los recorremos con un bucle
if ($resultado->num_rows > 0) {
  while($row = $resultado->fetch_assoc()) {
    // imprimimos cada fila de la consulta donde c1 es el campo1, c2 el campo2,...
    echo "$c1: " . $row["$c1"]. " $c2: " . $row["$c2"]. " $c3: " . $row["$c3"]. " $c4: " . $row["$c4"].   "<br>";
  }
} else {
  echo "No hay resultados";
}

$conexion->close();
?>