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
	<h2>Funciones</h2>
	<hr>
    <!--
    ==================================================================
                FUNCIONES (Definidas por el usuario)
    ==================================================================-->
    <h3>Funciones definidas por el usuario</h3>
    <?php
        function numero(){
            return 5;
        }
        $z=numero();
        print " el valor de z es: $z </br>";
    
        function nombre() {
            $a="La sintaxis es como la de Js";      
            print "$a </br>";
        }
        nombre();
    ?>
	<!--
	==============================================================
						Constantes 
			(Pueden ser arreglos a partir de PHP 7)
	==============================================================-->
	<h3>Constantes</h3>
	<?php
	define("SALUDO", "Hola tú.");
	echo SALUDO; // imprime "Hola tú."
	print "<br>";
	echo constant("SALUDO"); // lo mismo que la línea anterior
	?>


    <!-- 
    ================================================================
        Ambitos de las variables
    ================================================================-->
    <h3>Ambitos de las variables</h3>
    <?php 
        // Demostrar el ámbito de la variable
        $a = 1;
        $b = 2;
        function Sumar() {
            $a=5;
            $b=6;
            $b = $a + $b;			// no cambia fuera de la función
            // print " el valor de b es: $b </br>";
        }
        Sumar();
        print " el valor de b es: $b </br>";
    ?>

    <?php
    // Utilizando global, puedo ver la variable dentro del ámbito de la función
    $a = 1;
    $b = 2;
    function Suma() {
        global $a, $b;
        $b = $a + $b;
        //print " el valor de b es: $b </br>";
    }
    Suma();
    print " el valor de b es: $b </br>";
    ?>



<!--
==============================================================
	Funciones para el tratamiento de números
==============================================================-->
 <h3>Funciones para el tratamiento de números</h3><hr>
<?php
/*==============================================================
		Redondear números
==============================================================*/
    echo "round('55.5701', 3) -> ".round("55.5701", 3)."<br />";
    echo "round('55.5705', 3) -> ".round("55.5705", 3)."<br />";
    echo "round('55.481', 1) -> ".round("55.481", 1)."<br />";
    echo "round('55.537', 2) -> ".round("55.537", 2)."<br />";
    echo "round('55.4') -> ".round("55.4")."<br />";
    echo "round('55.5') -> ".round("55.5")."<p />";
    /* A partir de PHP 5.3.0 */
    echo "round(8.34, 1, PHP_ROUND_HALF_UP) -> ".round(8.34, 1, PHP_ROUND_HALF_UP)."<br />";
    echo "round(8.35, 1, PHP_ROUND_HALF_UP) -> ".round(8.35, 1, PHP_ROUND_HALF_UP)."<br />";
    echo "round(8.36, 1, PHP_ROUND_HALF_UP) -> ".round(8.36, 1, PHP_ROUND_HALF_UP)."<p />";
    /* A partir de PHP 5.3.0 */
    echo "round(8.34, 1, PHP_ROUND_HALF_DOWN) -> ".round(8.34, 1, PHP_ROUND_HALF_DOWN)."<br />";
    echo "round(8.35, 1, PHP_ROUND_HALF_DOWN) -> ".round(8.35, 1, PHP_ROUND_HALF_DOWN)."<br />";
    echo "round(8.36, 1, PHP_ROUND_HALF_DOWN) -> ".round(8.36, 1, PHP_ROUND_HALF_DOWN)."<p />";
    echo "ceil('55.4') -> ".ceil("55.4")."<br />";			// redondea hacia arriba
    echo "ceil('55.5') -> ".ceil("55.5")."<br />";
    echo "ceil('55.50') -> ".ceil("55.50")."<br />";
    echo "ceil('55.6') -> ".ceil("55.6")."<p />";
    echo "floor('55.4') -> ".floor("55.4")."<br />";		//redondea hacia abajo
    echo "floor('55.5') -> ".floor("55.5")."<br />";
    echo "floor('55.50') -> ".floor("55.50")."<br />";
    echo "floor('55.6') -> ".floor("55.6")."<br />";

/*==============================================================
	       Dar formato a un número
string number_format ( float $number [, int $decimals = 0 ] )
================================================================*/
    echo number_format(153.751)."<br />";     // Devuelve: 154
    echo number_format(153.751, 1)."<br />";  // Devuelve: 153.8
    echo number_format(153.751, 2)."<br />";   // Devuelve: 153.75

/*==============================================================
			Otras funciones matemáticas
================================================================*/
    echo "abs(33) = ".abs(33)."<br />";   // Devuelve: 33
    echo "abs(-5) = ".abs(-5)."<p />";    // Devuelve: 5
    echo "pow(2,3) = ".pow(2,3)."<p />";  // Devuelve: 8
    $aNumeros = array(2, 45, 23, 1, 230, 15);
    echo "min(\$aNumeros) = ".min($aNumeros)."<br />";    // Devuelve: 1
    echo "max(\$aNumeros) = ".max($aNumeros)."<p />";     // Devuelve: 230
    echo "rand() = ".rand()."<br />";             // Devuelve un número aleatorio
    echo "rand(1, 100) = ".rand(1, 100)."<br />"; // Devuelve un número aleatorio entre 1 y 100
    echo "sqrt(9) = ".sqrt(9)."<p />";				// Raíz cuadrada
    echo "decbin(1000) = ".decbin(1000)."<br />";                   // Convierte a binario. Devuelve: "1111101000"
    echo "bindec('1111101000') = ".bindec("1111101000")."<p />";    // Devuelve: 1000
    echo "dechex(1000) = ".dechex(1000)."<br />";       // Convierte a hexadecimal. Devuelve: "3e8"
    echo "hexdec('3e8') = ".hexdec("3e8");              // Devuelve: 1000
?>



<!--============================================================
	Funciones para el tratamiento de cadenas
================================================================ -->
<h3>Funciones para el tratamiento de cadenas</h3><hr>
<?php echo strlen("Mes de Enero"); // Cuenta los caracteres incuidos los espacios en blanco ?>
<br/>
<?php echo str_word_count("Mes de Enero"); // Cuenta las palabras ?>
<br/>
<?php echo strrev("Mes de Enero"); // Invierte la cadena?>
<br/>
<?php
    $a = "Buenas tardes";
    # Repetir cadenas
     echo str_repeat( "-", 8)."<br/>";			// Devuelve: "--------"
     echo "[".$a.str_repeat( "***", 25)."]<br />"; 
?>
<br/>
<?php
/*=========================================================================
    STR_PAD_BOTH: rellena la cadena por la derecha. 
    Si no se indica nada el cuarto parámetro se usará esta opción por defecto.
    STR_PAD_LEFT: rellena la cadena por la izquierda.
    STR_PAD_RIGHT: rellena la cadena a ambos lados.
===========================================================================*/
    $b = "Trabajando  ";
     echo "/".str_pad($b, 35, "-")."/<br />";		
     echo "[".str_pad($b, 25, "-", STR_PAD_LEFT)."]<br />";
     echo "[".str_pad($b, 25, "-", STR_PAD_BOTH)."]<br />";
     echo "[".str_pad($b, 25, "-X-", STR_PAD_BOTH)."]<br />";

/*================================================================
     Dividir el texto insertando saltos de línea
================================================================*/
    $cadena = "Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. ";
    echo wordwrap( $cadena, 20, "<br/>" )."<p/>";
    echo wordwrap( $cadena, 20, "<br/>", true )."<p/>";
    echo "<pre>";						//http://www.html.am/tags/html-pre-tag.cfm
    echo wordwrap( $cadena, 20, "\n" );
	echo "</pre>";
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