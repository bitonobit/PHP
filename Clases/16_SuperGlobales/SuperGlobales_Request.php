<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <label>Name: </label> <input type="text" name="fname">
  <input type="submit">
</form>

<?php
//  $ _REQUEST se utiliza para recopilar datos después de enviar un formulario HTML.
//  es un array asociativo que por defecto contiene el contenido de $_GET, $_POST y $_COOKIE.
//  Significa simplemente que es una variable que está disponible en cualquier parte.
//  https://www.php.net/manual/es/reserved.variables.php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// var_dump($_SERVER);
    // guarda el valor del input del formulario
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>
