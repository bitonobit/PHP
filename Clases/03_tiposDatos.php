<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clases de PHP</title>
    <meta name="description" content="Página de ejemplo">
    <meta name="keywords" content="HTML5, CSS3, Javascript, PHP">
    <meta name="author" content="Candy González">
    <!-- Librería Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Mi propio estilo -->
    <link rel="stylesheet" href="css/estilo.css">
    <!-- Fuentes de google -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat" rel="stylesheet">
    <!-- Mi Js -->
    <script src="js/libreria.js"></script>  
</head>
<body>  
	<div class="container">
	<h1>Sintaxis del lenguaje</h1><hr>
	<h2>Tipos de datos</h2>		
	<hr>	
	<!--
	============================================================================== 
						Aqui vamos a ir probando el código PHP
	============================================================================== -->
	<?php
		#Enteros
		print "<h3>Enteros</h3>";
		$a = 1234; // número decimal
		$b = -123; // número negativo
		$c = 0123; // número octal (equivalente al 83 decimal)
		$d = 0x12; // número hexadecimal (equivalente al 18 decimal) 
		$i = 5;
		print "Los valores de la a= $a la b= $b la c= $c la d= $d <br><hr>";
			
		#Flotantes o reales
		print "<h3>Flotantes</h3>";
		$e = 1.234; 
		$f = 1.5e3;
		$g = 7E-10;			
		print "Los valores de la e= $e y la f= $f y la g $g <br>";
			
		#Lógicos
		print "<h3>Lógicos</h3>";
		$a = TRUE;   			// un valor booleano
		$b = false;
		$c= True;
		echo gettype($a); 		// imprime: el tipo (boolean)
		print "<br>";
		var_dump($a);			// imprime: el tipo y el valor
		print "<br>";
		var_dump($b);
		print "<br>";
		var_dump($c);
		print "<br>";
		print "Los valores de la a= $a  la b= $b y la $c <br> <br> <hr>";
						
		#Null
		$x="mmm";
		var_dump($x);
		$x = null;
		var_dump($x);
			
		#Cadenas de caracteres
		$b = "Nombre"; 		 	// una cadena de caracteres
		$c = 'Apellido';  		// una cadena de caracteres
		// var_dump ($c, $b);
		
	// =======================================================
	// 	Escribimos algo
	// =======================================================		
		print "<h3>Cadenas de caracteres</h3>";
		print "<br>";
		print("Cien años de soledad <br>");
		print "El print() También funciona sin paréntesis. <br>";
		print 'a es $a <br>';   // Al usar comillas simples se mostrará el nombre de la variable, no su valor
		print $a;         		// simplemente mostrar variables 
		print "<br>";
		// imprimir un párrafo
print <<<END
		Este párrafo utiliza la sintaxis here document para mostrar
		múltiples líneas con la interpolación de $a. Nótese
		que el terminador de here document debe aparecer al final
		de la línea con punto y coma y ¡ningún espacio en blanco extra!
END;
	
		print "<br><hr>";
		$str = "Mi nombre es:"; /* Asignando una Cadena de texto. */
		$str = $str . " Candy";
		$str .= " González Delgado"; // Concatenando 
		print "$str <br>";

	
/*	================================================================
					Conversión de tipos
	================================================================				
	(int), (integer) - fuerza a entero (integer). Ej: (int)$x;
	(real), (double), (float) - fuerza a doble (double)
	(string) - fuerza la cadena (string)
	(array) - fuerza a array (array)
	(object) - fuerza a objeto (object)
	(unset) - forzado a NULL (PHP 5)
	----------------------------------------
	Para verificar el tipo de una variable
	-----------------------------------------
	is_nan(), is_numeric(), var_dump()
====================================================================	*/
	$x = 1 + "10.5";                // $x es doble (11.5)
	print "$x <br>";
	$x = 1 + "-1.3e3";              // $x es doble (-1299)
	print "$x <br>\n";
	$x = 1 + "10 Cerditos";         // $x es entero (11)
	print "$x <br>\n";
	$x = 1 + "10 Cerditos";         // $x es entero (11)
	print "$x <br>\n";
	$x = "10.0 cerdos " + 1;        // $x es entero (11)
	print "$x <br>\n";
	$x = "10.0 cerdos " + 1.0;      // $x es doble (11)
	print "$x <br>\n";
	?>
		
	</body>
</html>