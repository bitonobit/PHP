<?php
session_start();	//1. abro la sesión

	// Ejemplo: pinta una tabla de array bidimensional
	$compra=array("fruta" => ["Pera", "Manzana", "Limón"],
				  "queso" => ["Gouda","Edam", "De Cabra"],
				  "verdura" => ["Zanahoria","Pepino", "Papa"]);	
	echo "<table border=1>";
	foreach ($compra as $fruta) {
		echo "<tr>";
		foreach ($fruta as $key) {
			print "<td>" .  $key . " </td>";
		}
		echo "</tr>";
	}
	echo "</table> <br>";
// Se termina el primer ejemplo


//2. Creo $_session si está vacía, es decir que no se ha creado todavía

	if (empty($_SESSION["fruta"])){
			$_SESSION["fruta"]=array();
			$_SESSION["queso"]=array();
			$_SESSION["verdura"]=array();
	}

	echo '<form action="" method="POST">
			Lista: <input type="text" name="articulo" value="" maxlength="90" style="width:100px;"><br>
			Selecciona:
			<input type="radio" name="item" value="fruta"> Frutas
			<input type="radio" name="item" value="queso"> Quesos
			<input type="radio" name="item" value="verdura"> Verduras
			<br>
			<input type="submit" name="submit" value="agrega">
		</form>	';

		if (isset($_POST["submit"])){
			array_push($_SESSION[$_POST["item"]], $_POST["articulo"]);
			print_r($_SESSION);	
		}

?>
