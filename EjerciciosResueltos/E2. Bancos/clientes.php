<?php 
session_start();					// Inicia sesion
if( empty($_SESSION['dni']) || empty($_SESSION['iban']) ){		// si está vacía crea los arreglos en la  sesion
	$_SESSION["iban"]= array();
	$_SESSION["entidad"]= array();
	$_SESSION["oficina"]= array();
	$_SESSION["control"]= array();
	$_SESSION["cuenta"]= array();

	$_SESSION['dni'] = array();
	$_SESSION['nombre'] = array();
	$_SESSION['apellidos'] = array();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Clientes</title>
</head>
<body>
    <!-- Ejercicio con varios clientes y cuentas, necesita el 123.php -->
	<form action="clientes.php" method="GET">
		<fieldset>
		<legend><b>Datos del Cliente</b></legend>
		<label for="nombre"> Nombre: </label><input type="text" name="nombre" maxlength="25" size="30">
		<label for="apellidos"> Apellidos: </label><input type="text" name="apellidos" maxlength="60" size="60">
		<label for="dni"> DNI: </label><input type="text" name="dni" maxlength="20" size="20"><p/>
		</fieldset>
		<fieldset>
			<legend><b>Datos de la Cuenta</b></legend>
			<label for="iban">IBAN:  </label><input type="text" name="iban" size="2">
			<label for="entidad">Entidad:  </label>:<input type="text" name="entidad" size="2">
			<label for="oficina">Oficina:  </label><input type="text" name="oficina" size="2">
			<label for="control">DC:  </label><input type="text" name="control" size="1">
			<label for="cuenta">Nº Cuenta:  </label>:<input type="text" name="cuenta" size="8"><p/>
		</fieldset>
		<p/>
		<input type="submit" name="submit">
	</form>

<?php

if (isset($_GET['submit'])) {

	# agrega los elementos al array de sesion con dos parámetros el nombre del arreglo + el valor introsucido.
	array_push($_SESSION["iban"],$_GET['iban']);
	array_push($_SESSION["entidad"],$_GET['entidad']);
	array_push($_SESSION["oficina"],$_GET['oficina']);
	array_push($_SESSION["control"],$_GET['control']);
	array_push($_SESSION["cuenta"],$_GET['cuenta']);

	array_push($_SESSION["dni"],$_GET['dni']);
	array_push($_SESSION["nombre"],$_GET['nombre']);
	array_push($_SESSION["apellidos"],$_GET['apellidos']);


}
	# Muestra los clientes en la pantalla
echo "<h1> Listado de Clientes </h1> <hr>";
echo "<br>";
include '123.php'
?>

</body>
</html>