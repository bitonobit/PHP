<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Factorial</title>
</head>
<body>
	<h1>Calcular el factorial de un número</h1>
	<form action="10_Factorial.php" method="POST">
		<input type="text" name="num1" placeholder="num1"><br>
		<input type="submit" name="submit" value="Enviar">
	</form> <br><br>

<?php

if (isset($_POST['submit'])) {
	
	$num1 =  $_POST['num1'];		// Número introducido por el formulario

function fact($str) {				// Función factorial con un parámetro

	$num1 = $str;
	$fn = 1;

	for ($i=$num1; $i >= 1 ; $i--) { 

		$fn *= $i;
	}

	return $fn . "<br>";

}

echo fact($num1);					// LLAMADA A LA FUNCIÓN

}

?>

</body>
</html>