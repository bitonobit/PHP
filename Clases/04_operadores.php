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
	<h2>Operadores</h2>
	<hr>
	<?php
		#Aritméticos
		$m=5;
		$n=2;
		echo "m=$m y n=$n <br>";		// muestra los valores de ls variables
		echo (-$m)."<br>";         	  	// Multiplica por el menos y muestra -1
		echo ($m+$n)."<br>";          	// suma
		echo ($m-$n)."<br>";          	// resta
		echo ($m*$n)."<br>";          	// multiplica
		echo ($m/$n)."<br>";          	// divide
		echo ($m**$n)."<br>";          	// potencia
		echo ($m % $n)."<br>";         	// resto de laa división ó módulo
		#Asignación
		$a=8;
		$b=2;
		$a += $b;       //$a = $a + $b     
		$a -= $b;       //$a = $a - $b      
		$a *= $b;       //$a = $a * $b     
		$a /= $b;       //$a = $a / $b      
		$a %= $b;       //$a = $a % $b   
		$w = ($h = 4) + 5;
		print "w = $w y h = $h <br>";  
		#Asignación por referencia
		$a = 7;
		$b = &$a; 		// $b es una referencia para $a
		print "a = $a y b = $b <br>"; 
		$a = 4; // cambia $a
		print "a = $a y b = $b <br>";  // muestra 4 también, dado que $b es una referencia para $a, la cual ha sido cambiada
		#Concatenación
		$a .= $b;    // $a = $a . $b
		
		#Comparación  http://php.net/manual/es/types.comparisons.php
		#Comparación de tipos: usamos función is_
		$p=5;
		$q="No";
		if (is_int($p)) {					// Si el p es entero, incrementarlo en cuatro	
			$p += 4;
		}
	
		if (is_string($q)) {				//Si $q es un string lo muestra
			echo "Cadena: $q <br>" ;
		}

	?>

</body>
</html>