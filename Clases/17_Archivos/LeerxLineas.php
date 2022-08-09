<?php
	$archivo = fopen("glosario.txt", "r") or die("No se pudo abrir el archivo!");
	
		// Muestra linea a linea hasta esl finaldel archivo
		while(!feof($archivo)) {
		  echo fgets($archivo) . "<br>";
		}

	fclose($archivo);
	 
?>