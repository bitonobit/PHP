<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>El mayor de tres números</title>
</head>
<body>
	<h1>El mayor de tres números</h1>
	<form action="Mayor_de_tres.php" method="post">
		<label for="Numero1">Número 1:</label><input type="text" name="num1"><br>
		<label for="Numero2">Número 2:</label><input type="text" name="num2"><br>
		<label for="Numero3">Número 3:</label><input type="text" name="num3"><br>
		<input type="submit" name="submit" value="Enviar">
	</form> 
	<br>
<?php
if (isset($_POST['submit'])) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];
	$num = array($num1,$num2,$num3);
	echo "El número mayor es: " . max($num); //la función max muestra el número mayor de un array
}
?>
</body>
</html>