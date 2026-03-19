<!DOCTYPE html>
<html lang="es">
    <head>
      <!-- Metadata -->
        <meta charset="utf-8">
		<title>PHP &mdash; HTML</title>
		<style>
            table 	{ border: 1px solid black; border-collapse: collapse; }
            td 		{ border: thin solid black; }
        </style>		
	</head>
	<body>
	<main>
		<h1>Saber más...</h1><hr>		
		<h2> Poner estilo al texto</h2><br>
				
		<?php  echo "<i style='color:red;'>Nombre</i><br><u style='color:blue;'>Apellido</u>"; 
			   //<tagname style="property:value;"> Colocar estilo desde php. ?>	

		<h2> Hacer un link </h2>
		<?php 
			echo "Ve al manual <h2>
            <a href='http://html.am/' target='_blank' style='color:green;'>Html </a><br/>
            <a href='http://php.net' target='_blank' style='color:blue';> PHP.net</a></h3>";
		?>

		<h3> Dibujar una tabla dinámica</h3>
		<?php
		echo "<table width='60%' border='2' ><tr><th colspan='3' 
			style='background-color: grey;'>Título de la Tabla</th>"; 
			// th: encabezado, td: celda, tr: filas, colspan: para que una celda ocupe varias columnas
		echo "<th width='20%'></th></tr>";
		for($i = 1 ; $i < 6 ; $i++){				// 6 Filas
			echo "<tr>";
			for($j = 1 ; $j < 5 ; $j++){			// 4 Columnas
				if($i == 1 && $j == 4)
					echo "<td rowspan='5'></td>";	// Dibuja la cuarta columna de un ancho de 5 filas
				elseif($i == 5 && $j == 1)
					echo "<td></td>";
				elseif($i == 5 && $j == 2)			// 5 Filas, 2 Columna
					echo "<td style='background-color: grey;'>Celda "
					. $i . "." . $j . "</td>";
				elseif($i > 1 && $j == 4)
					break;
				else
					echo "<td>Celda " . $i . "." . $j . "</td>";
			}
			echo "</tr>";
		}   
		echo "</table>";
	?>
	
	
	<h2> Tabla de info</h2><br>
		<?php
			// phpinfo();
			
			// Obtiene la versión del servidor Apache
			echo "<table width ='30%'><tr><td>PHP_VERSION</td><td width='40%'>". apache_get_version() . "</td></tr>";
			
			//Devuelve información sobre el sistema operativo en que se está ejecutando PHP
			echo "<tr><td>PHP_OS</td><td width='40%'>". php_uname() . "</td></tr>"; 

			//Recupera la ruta de acceso al archivo php.ini cargado
			echo "<tr><td>PHP_EXTENSION_DIR</td><td width='40%'>" . php_ini_loaded_file() . "</td></tr>";
			echo "<tr><td>PHP_LIBDIR</td><td width='40%'>". php_ini_loaded_file(). "</td></tr></table>";
		?>
		
	</main>			
	</body>
</html>