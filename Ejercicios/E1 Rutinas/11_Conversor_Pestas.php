<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Conversor de Euros a Pesetas</title>
</head>
<body>
	<h1>Conversor de Euros a Pesetas</h1>
	<form action="" method="POST">
		<input type="text" name="num1" placeholder="eur"><br>
		<input type="submit" name="submit" value="Enviar">
	</form> <br><br>

<?php

if (isset($_POST['submit'])) {
	$num1 =  $_POST['num1'];
	$total = $num1 * 166.386;
	echo $total;
}

?>

</body>
</html>