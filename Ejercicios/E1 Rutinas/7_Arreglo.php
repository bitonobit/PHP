<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos en un arreglo</title>
</head>
<body>
	<h1>Datos en un arreglo</h1>
	<form action="7_Arreglo.php" method="POST">
		<input type="text" name="nom" placeholder="nombre"><br>
		<input type="number" name="edad" placeholder="edad"><br>
		<input type="text" name="city" placeholder="ciudad"><br>
		<input type="submit" name="submit" value="Enviar">
	</form> 
<br><br>


<?php
if (isset($_POST['submit'])) {

	$nom  = $_POST['nom'];
	$edad = $_POST['edad'];
	$city = $_POST['city'];

	$datos = array ($nom, $edad, $city);

	if ($datos[1] >= 18) {
		echo "HOLA " . $datos[0] . " de " . $datos[2] . ", tienes " . $datos[1] . "Eres mayor de edad";
	}
	else {
		$diff = (18 - $datos[1]);
		echo "HOLA " . $datos[0] . " de " . $datos[2] . ", tienes " . $datos[1] . "años, aun no eres mayor de edad <br>";
		echo "te falta " . $diff . " años"; 
	 }

}

?>
</body>
</html>