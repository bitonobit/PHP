<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Billetes de avión</title>
</head>
<body>
	<h1>Bebe, niño o adulto</h1>
	<form action="" method="POST">
		<input type="number" name="edad" placeholder="0"><br><br>
		<input type="submit" name="submit" value="Enviar"><br><br>
	</form> 
	<br>
	<hr>

<?php

if (isset($_POST['submit'])) {
	
	$edad = $_POST['edad'];

	if ($edad >= 12) {
		echo "Billete para adulto: 100 Euros";
	}
	else if ($edad >= 3 ){
	echo "Billete para niño: 75 Euros";
	}
	else if ($edad >= 0 ) {
	echo "Billete para bebe: 50 Euros";
	}
	else {
		echo "Los datos introducidos no son válidos intentelo de nuevo";
	}
}

?>

</body>
</html>