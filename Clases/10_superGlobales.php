<?php
/*===========================================================================
  Las variables superglobales de PHP, siempre están disponibles en todos los ámbitos. Son: $GLOBALS, $_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_ENV, $_COOKIE, $_SESSION
=============================================================================

1. $GLOBALS: para acceder a las variables globales 
desde cualquier parte del script PHP */
$a = 5;
$b = 10;
function suma() {
  $GLOBALS['res'] = $GLOBALS['a'] + $GLOBALS['b'];
}
suma();
echo $res;
echo "<hr>";

#2. $_SERVER contiene información sobre encabezados, rutas y ubicaciones de secuencias de comandos.
echo $_SERVER['PHP_SELF']; //Devuelve el nombre de archivo del script que se está ejecutando actualmente
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo $_SERVER['SERVER_PORT']; //Devuelve el puerto en el que escucha el servidor
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];  //Devuelve la ruta del script actual.

//https://www.w3schools.com/php/php_superglobals_server.asp
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label>Nombre: </label><input type="text" name="nombre">
    <input type="submit" name="btn1">
</form>

<?php
#3. $_REQUEST se utiliza para recopilar datos después de enviar un formulario HTML.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_REQUEST['nombre'];
  if (empty($nombre)) {
    echo "No has escrito el nombre";
  } else {
    echo $nombre;
  }
}
#4. $_POST se utiliza para recopilar datos después de enviar un formulario HTML.
#5. $_GET se utiliza para recopilar datos después de enviar un formulario HTML.
?>