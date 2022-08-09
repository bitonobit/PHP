<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mayor de edad</title>
</head>
<body>
	<h1>Mayor de edad</h1>
	<form action="" method="POST">
		<input type="text" name="nom" placeholder="nombre"><br><br>
		<input type="text" name="edad" placeholder="edad"><br><br>
		<input type="submit" name="submit" value="Enviar">
	</form> <br><hr>

<?php

if (isset($_POST['submit'])) {
	
	$nom = $_POST['nom'];
	$edad = $_POST['edad'];

	if ($edad >= 18) {

		echo "Hola " . $nom . ", tienes " . $edad . "años, ya puedes votar";
	}
	else {
		$diff = (18 - $edad);
		echo "Hola " . $nom . ", tienes " . $edad . "años, aun no puedes votar <br>";
		echo "te faltan " . $diff . " años"; 
	 }
}

?>
</body>
</html>