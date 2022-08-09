<?php
session_start();

if(empty($_SESSION)){
	$_SESSION["iban"]= array();
	$_SESSION["entidad"]= array();
	$_SESSION["oficina"]= array();
	$_SESSION["control"]= array();
	$_SESSION["cuenta"]= array();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cuentas</title>
</head>
<body>
	<!-- Ejercicio para un cliente y varias cuentas -->
	<form action="cuentas.php" method="GET">
		<label  for="iban">IBAN:</label><input type="text" name="iban">
		<label for="entidad">Entidad:</label><input type="text" name="entidad">
		<label for="oficina">Oficina:</label><input type="text" name="oficina">
		<label for="control"></label>Dígito de Control:<input type="text" name="control">
		<label for="cuenta">Cuenta:</label><input type="text" name="cuenta">
		<input type="submit" name="submit">
	</form>

<?php

if (isset($_GET['submit'])) {
	array_push($_SESSION["iban"],$_GET['iban']);
	array_push($_SESSION["entidad"],$_GET['entidad']);
	array_push($_SESSION["oficina"],$_GET['oficina']);
	array_push($_SESSION["control"],$_GET['control']);
	array_push($_SESSION["cuenta"],$_GET['cuenta']);
}

echo "<hr>";
echo "<br>";
 include '123.php'
?>

</body>
</html>