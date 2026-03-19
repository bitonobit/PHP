<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Promedio</title>
</head>
<body>
	<h1>Promedio de 5 números</h1>
	<form action="" method="post">
		<input type="text" name="num1" placeholder="num1"><br>
		<input type="text" name="num2" placeholder="num2"><br>
		<input type="text" name="num3" placeholder="num3"><br>
		<input type="text" name="num4" placeholder="num4"><br>
		<input type="text" name="num5" placeholder="num5"><br>
		<input type="submit" name="submit" value="Enviar">
	</form> <br><br>

<?php

if (isset($_POST['submit'])) {								//isset dice si la variable es nula

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];
	$num4 = $_POST['num4'];
	$num5 = $_POST['num5'];
	$nt = array($num1, $num2, $num3, $num4, $num5);			// arreglo con las notas		
	$total = 0;												// iniciamos la variable total en 0

	foreach ($nt as $i) {									//modo sencillo de iterar sobre arrays, funciona sólo sobre arrays y objetos
															//https://www.php.net/manual/es/control-structures.foreach.php

			if (empty($i)) {								//empty — Determina si una variable está vacía
															//https://www.php.net/manual/es/function.empty.php
				echo "error no ha introducido los 5 numeros";
				return false;
			}
			else {
				$total += $i;								//añade cada uno de los valores consecutivos del arreglo
			}
}

echo "El promedio de los 5 numeros es: " . ($total/5);  // Da la media

}

?>

</body>
</html>