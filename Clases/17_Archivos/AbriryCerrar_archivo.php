<?php
	$archivo = fopen("glosario.txt", "r") or die("No se pudo abrir el archivo!");
	echo fread($archivo,filesize("glosario.txt"));
	fclose($archivo);
	// https://www.w3schools.com/php7/php7_file_open_read.asp
?>
