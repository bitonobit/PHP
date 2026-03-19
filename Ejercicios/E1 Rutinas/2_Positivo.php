<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Positivo</title>
</head>
<body>
	<h1>Número negativo, cero o positivo</h1>
	<form action="" method="POST">	
		<label for="Número">Número: </label><input type="number" name="num1">
		<input type="submit" name="submit" value="Enviar">
	</form> 
	<br>
	<hr>

<?php
	if (isset($_POST['submit'])) {
		$num = $_POST['num1'];
		switch ($num) {
			case 0:
				echo "El número es cero";
				break;
			case ($num > 0):
				echo "El número es positivo";
				break;
			default:
				echo "El número es negativo";
				break;
		}
	}
?>
</body>
</html>