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
	<h2>Entrada de datos</h2>

<form action="" method="POST">		
	<label for="nombre">Dime tu nombre:</label> 
	<input type="text" name="nombre">
	<label for="edad">Dime tu edad:</label>
	<input type="text" name="edad" />
	<input type="submit" name="boton" value="Enviar" />
	<!-- submit envía las variables a la pagina php que le indiquemos en la 
		etiqueta action-->
</form>				
<?php
	if(isset($_POST["boton"])){	
		//isset detiene la ejecución hasta que presionemos el botón
		echo '¡Hola  ' . $_POST["nombre"] . ' !';
		echo "Tienes  " . $_REQUEST["edad"]. " años";
	}
?>

	</div>		<!--Cierra el contenedor -->
	
	<!-- <form action="" method="post">
	Nombre:  <input type="text" name="personal[nombre]" /><br />
	Email:   <input type="text" name="personal[email]" /><br />
	Cerveza: <br />
	<select multiple name="cerveza[]">
		<option value="warthog">Warthog</option>
		<option value="guinness">Guinness</option>
		<option value="stuttgarter">Stuttgarter Schwabenbräu</option>
	</select><br />
	<input type="submit" value="¡enviarme!" />
	</form> -->
		
</body>
</html>
