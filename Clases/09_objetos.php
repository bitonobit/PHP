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
<!-- 
=======================================================
				OBJETOS
=======================================================
 -->
 	<h3>Objetos</h3>
	<?php
	#Ejemplo de una clase
 
	class Persona{
		#Atributos
		public $nombre = "Angel";
		#Métodos
		public function hablar($mensaje){
			echo $mensaje;
		}
	}
	
	//Estamos instanciando una clase en este objeto llamada Persona
	$persona = new Persona();		//Creamos Objetos
	echo $persona -> nombre;		//Llamamos a un atributo o método
	$persona -> hablar("  Saludos desde los Realejos");

?>
	</body>
</html>