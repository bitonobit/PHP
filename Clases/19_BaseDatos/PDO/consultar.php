<?php
//1. Conectar a la base de datos
    include "conexion.php";
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Nombre</th><th>Password</th><th>Email</th><th>Registrado</th></tr>";

class FilasTabla extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  //beginChildren y endChildren son métodos heredados que se llaman automáticamente al obtener los hijos de RecursiveArrayIterator
  function beginChildren() {  
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}
//2. Crear la conexión
try{
  $conexion = new PDO("mysql:host=$servidor;dbname=$BD", $usuario, $password);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //3.Crear la instrucción sql en una variable
  $tabla="usuario";
  $c1="id";
  $c2="nombre";
  $c3="pass";
  $c4="email";
  $sql = "SELECT * FROM $tabla";
  //4. Ejecutar
  $consulta=$conexion->prepare($sql);
  $consulta->execute();
  $resultado=$consulta->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new FilasTabla(new RecursiveArrayIterator($consulta->fetchAll())) as $k=>$v){
    echo $v;
  }  
  } catch(PDOException $error){
    echo "$sql Error: ". $error->getMessage();
  }
       
  //5. cerrar la conexion
  $conn = null;
  echo "</table>";
?>