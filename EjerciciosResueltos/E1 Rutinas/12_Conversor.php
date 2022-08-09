<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Conversor de Moneda</title>
</head>
<body>
	<h1>Conversor de Moneda</h1>
	<form action="12_Conversor.php" method="post">
	
		<input type="text" name="num1" placeholder="num1">
		<select name="moneda1">
			<option value="euro">euros</option>
			<option value="dol">dolar</option>
			<option value="lib">libra</option>
			<option value="yen">yen</option>
			<option value="aus">aus</option>
			<option value="can">can</option>
		</select>

		<select name="moneda2">
			<option value="euro">euros</option>
			<option value="dol">dolar</option>
			<option value="lib">libra</option>
			<option value="yen">yen</option>
			<option value="aus">aus</option>
			<option value="can">can</option>
		</select>
		<br><br>
		<input type="submit" name="submit" value="Enviar">
	</form> 
<br>
<hr>

<?php

	if (isset($_POST['submit'])) { 				// cuando se envíe el formulario comenzará la siguiente instrucción 
		
		$num1 = $_POST['num1']; 				// la cantidad a convertir
		$mon1 = $_POST['moneda1']; 				// la moneda de partida
		$mon2 = $_POST['moneda2']; 				// la moneda a la que queremos convertir
		
		// guardamos en un array el valor de una moneda respecto al dolar. EJ: 1€ = 1.13 $ - 1Y = 0.09$
		$to_dollar  = array( "euro"=>1.13,  "yen"=>0.09, "lib"=>1.29, "aus"=>0.7559, "can"=>0.74); 

		//guardamos en un array el valor de un dolar respecto a una moneda. EJ: 1$ = 0.89 €
		$from_dollar  = array( "euro"=>0.89,  "yen"=>109.52, "lib"=>0.77, "aus"=>1.3227, "can"=>1.34 ); 

		if ($mon1 != $mon2) {

			if ($mon1=="dol") { 							// Si queremos convertir dólares a otra monedas
				echo   ($num1 * $from_dollar[$mon2]);		// pasamos la cantidad deseada a dólares ($to_dollar[])
			} 
			else if ($mon2=="dol") {  						// Si queremos convertir culaquier moneda a dólares
				echo   ($num1 * $to_dollar[$mon1]);			// pasamos la cantidad deseada de dólares a cualquier otra ($from_dollar[])		
			} 
			else { 											//si queremos convertir monedas y que ninguna de ellas sea dólares
				/* pasamos la cantidad deseada a dólares ($to_dollar[]) y de dólares lo pasamos a la moneda deseada 
				($from_dollar[$mon2]) EJ: 15€ a Yenes >>> 15 * $to_dollar['euro'] = 16.95$ * $from_dollar['yen'] = 1856.36 yenes */
				echo   ($num1 * $to_dollar[$mon1]) * $from_dollar[$mon2];	
			}

		} 

	}
?>

</body>
</html>