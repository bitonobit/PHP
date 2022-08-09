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
    <!--Contenido de la página -->
    <div class="container"> 
      <h1> Jugando con PHP </h1>
      <hr>
    <div class="row"> 
        <?php 		
           print "<p>Buenos días por la mañana</p>";    // Así coloco un comentario

          /*  Usando una variable:*/
              $nombre="Candy";
              print "<p>El nombre es: " . $nombre . "</p>"; 
          
          /*  Otra forma de hacerlo, sin concatenar: */
              print "<p>El nombre es: $nombre </p>";
         
          /*  Ojo con las comillas simples, imprime literal: */
              print '<p>El nombre es: $nombre </p>';
                  
          /* Otra forma de mostrar en pantalla es con la expresión: echo */
              $apellido = " González";
              echo $nombre, $apellido; 
        ?>
     </div>   <!--Cierra la fila -->
    </div>    <!--Cierra el contenedor -->
  </body>
</html>
