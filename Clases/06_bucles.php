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
	<h2>Estructuras de control de flujo iterativas</h2>
	<hr>
    
<!--
==================================================================
			ESTRUCTURAS DE CONTROL ITERATIVAS
===================================================================
-->
<h3>Mientras</h3>
<?php
    #Mientras
    // 01 sintaxis
    $i = 1;
    while ($i <= 10) {
        echo $i++;  /* el valor presentado sería $i antes del incremento (post-incremento) */
    }

    //02 sintaxis
    $i = 1;
    print "<br/>";
    while ($i <= 10):
        //echo $i;
        print "<font size=3 color= red > $i </font>";
        $i++;
    endwhile;
?>
<h3>Repetir</h3>
<?php
    #Hacer mientras (Equivqlente al repetir, se ejecuta al menos una vez)
    $i = 0;
    do {
        //echo $i; 
        print "<p><font size=7 color= blue > i: $i </font></p>";
    } while ($i > 0);
?>
<h3>Para</h3>
<?php
    #Para
    //1. Escribe el valor de i 10 veces
    for ($i = 1; $i <= 10; $i++) {
        //echo $i;
        print "<p><font size=3 color= orange > $i </font></p>";
    }
    //2. Escribe el valor de i 10 veces pero la condición esta dentro de la iteración
    for ($i = 1; ; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i;
    }
    //3. Escribe el valor de i 10 veces pero la iterción no evalúa ninguna condición (se ejecuta al menos 1 vez)
    print "<br/>";
    $i = 1;
    for (; ; ) {
        if ($i > 10) {
            break;
        }
        echo $i;
        $i++;
    }
    //4. Escribe el valor de i 10 veces 
    print "<br/>";
    for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
?>

<!--
==================================================================
			ESTRUCTURAS DE CONTROL ITERATIVAS EN ARREGLOS
===================================================================
-->
<h3>Estructuras de control iterativas con arreglos</h3>
<?php
    //foreach, paso de parámetros por referencia. Solo a partir de PHP 5.5
    print "<br/>";
    $arreglo = array(1, 2, 3, 4);
    var_dump($arreglo);
    print "<br/>";
    foreach ($arreglo as &$valor) {
        $valor = $valor * 2;
    }
    var_dump($arreglo);    	// $array ahora es array(2, 4, 6, 8)
    unset($valor); 			// rompe la referencia con el último elemento
?>



<?php
    echo date("l");
    echo time();
    //Variables variables
    print "<h3>Variables variables</h3><br>";
    $y = "Ruta";
    // var_dump($y);
    $$y = "ampliada";
    echo "$y ${$y}";
    print "<br>";
?>

</body>
</html>