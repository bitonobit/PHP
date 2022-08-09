<?php
	$archivo = fopen("nuevo.txt", "w") or die("No se pudo crear el archivo!");
		// Escribe dentro del archivo
		$txt = "Candy Gonzalez\n";
		fwrite($archivo, $txt);
		$txt = "Sebastian Bach\n";
		fwrite($archivo, $txt);
	fclose($archivo);
	 
?>