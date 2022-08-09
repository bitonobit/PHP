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
	<h2>Estructuras de datos</h2>
	<hr>
	<h3>Arrays</h3>
<!-- ===================================================
					Arrays
======================================================== -->
<?php  
	/*---------------------------------------------------------------
	Sintaxis: $variable = array(valor1, valor2, valor3,.., valorN);
			  $variable = [valor1, valor2, valor3,.., valorN]; 
	------------------------------------------------------------------*/
	$libros = array("Cien años de solead","Flores en el ático","Los renglones torcidos de Dios","El poeta","El extranjero");
	$alumnos= ["Gabriel","Ana", "Andrés"];
	# Arrays vacíos. A partir de PHP 5.4 puedes usar corchetes directamente para crear arrays
	$libro=array();
	$alu=[];

	# Array con elementos de distinto tipo
	$detalleAlumno=["12345678Z","Andrés","García", 25, true];
	
	# Mostrar tipo y/o contenido del array
		var_dump($libros);
		print_r($libros);	

	# Mostramos los resultados
	print "<p><br> Mis libros favoritos son: $libros[0], $libros[1] y $libros[2] <br></p>";
	
	#02 array asociativo
	$cliente = array("nombre" => "Candy", "apellido" => "González", "dni"=>"12345678Z");

	print "<p> El cliente es: ". $cliente["nombre"] ." ". $cliente["apellido"] ." con DNI: " . $cliente["dni"] ."</p>";
	
	/* ----------------------------------------
		foreach ($arr as $key => $value) {
			Código
		}	
	-------------------------------------------*/
		$nota = ["Ana"=>5, "Andrés"=>3.7, "Carolina"=>4.3, "Marcos"=>4.3, "Pedro"=>6.2, "Heidi"=>5.8, "Clara"=>9.5, "Niebla"=>10];
		foreach($nota as $tapa => $valor) {
		  echo "$tapa = $valor<br>";
		}
	
	/*--------------------------------------------
			Funciones para manipular arrays
	----------------------------------------------*/
	$lib = array("Cien años de solead","Flores en el ático","Los renglones torcidos de Dios","El poeta","El extranjero");
	array_pop($lib);
	print_r($lib);



	#asi es la unión de los elementos, por ejemplo:
	$x = array( "Gana", "Resultado");
	$y = array( "Real", "Madrid", "Champion");
	$z = $x + $y; // Unión de $a y $b
	echo "<br> Unión de x+y: ";
	var_dump($z);
	$z = $y + $x; // Unión de $b y $a
	echo "<br> Unión de y+x: ";
	var_dump($z);
	echo "<hr>";

	#04  Una matriz bidimensional, necesita dos índices para seleccionar un elemento
	/*
		Nombre		Apellido	Edad
		------------------------------
		Ana			Paz			18
		Rafael 		Pérez		23
		Clara		Montes		20
		Andres 		Ramos		31
	*/
	$lista=[["ANA","PAZ",18],
			["RAFAEL","PEREZ",23],
			["CLARA","MONTES", 20],
			["ANDRES","RAMOS",31]];

	//1. Imprime un elemento
	echo $lista[3][1];
	
	//2. Imprime todos los elementos
	$n=count($lista)-1;
	$m=count($lista[0])-1;
	for($i=0; $i<=$n; $i++){
		for($j=0; $j<=$m; $j++){
			echo $lista[$i][$j] ."<br>";
		}
	}

	//3. Imprime todos los elementos usando un foreach
	foreach($lista as &$alu){
		foreach($alu as $x){
			echo "$x  -";
		}
	}

	//2. Imprime todos los elementos dentro de una tabla
	echo "<table><tr><th>Nombre</th><th>Apellido</th><th>Edad</th></tr>";
	foreach($lista as &$alu){
		echo "<tr>";
		foreach($alu as $x){
			echo "<td>$x  </td>";
		}
		echo "</tr>";
	}

/*=========================================================
		Funciones para ordenar arrays
-----------------------------------------------------------
	#01 sort()- ordenar arreglos ascendentemente         */

$coches=["Volkswagen","BMW","Toyota","Fiat","Renault"];
sort($coches);
$largo=count($coches);
for($i=0;$i<$largo;$i++)
  {
  echo $coches[$i];
  echo "<br>";
  }
	


?> 
		
</body>
</html>