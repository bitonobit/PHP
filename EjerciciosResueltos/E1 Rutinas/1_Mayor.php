<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mayor</title>
</head>
<body>
	<h1>El mayor de dos números</h1>
	<form action="" method="POST">
		<input type="text" name="num1"><br><br>
		<input type="text" name="num2"><br><br>
		<input type="submit" name="submit" value="Enviar">
	</form> 
	<hr>

<?php
	
	/* isset ()  — Determina si una variable está definida y no es NULL. 
	   Sintaxis: isset ( mixed $var [, mixed $... ] ) devuelve bool 
	   https://www.php.net/manual/es/function.isset.php      */

	if (isset($_POST['submit'])) {

		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$num = array($num1,$num2);
		echo "El mayor es: " . max($num); 	// La función max muestra el número mayor de un array
	}

?>
</body>
</html>