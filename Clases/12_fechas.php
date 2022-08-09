<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fechas en PHP</title>
</head>
<body>
	<h1>Fechas en PHP</h1>

<?php	
    //Establece la zona horaria predeterminada usada por todas las funciones de fecha/hora en un script
    date_default_timezone_set('UTC');

    //Obtener la fecha de hoy 
    $hoy = getdate();   

    //print_r($hoy); //Imprime información legible para humanos ;) sobre una variable. En este caso hoy es un array asociativo
        $d = $hoy['mday'];
        $m = $hoy['mon'];
        $y = $hoy['year'];
    
    echo " Hoy es el dia $d del mes $m del $y<br>";

    echo "<h3>La función date()</h3>";
    // Devuelve los cuatro dígitos del año.
	echo "Muestra el año: ".date("Y")."<br>";	

    // Devuelve la fecha en formato: "31 Aug 19"	    	   
	echo "Muestra la fecha: ".date("d M y")."<br>";	
   
    // Devuelve la fecha en formato: "31/08/2019"
	echo "Muestra la fecha en formatodd/mm/aaa ".date("d/m/Y")."<br>";			

    // Devuelve fecha y hora en formato: "31/08/2019 11:24:52"
	echo "Muestra la fecha y la hora: ".date("d/m/Y h:i:s")."<br>"; 
    
    // Devuelve la hora en formato 24H: "23:24:52"
	echo date("H:i:s")."<br>";		

	echo "Son las ".date("h:i:s")." del ".date("d/m/Y")."<p />";  

    //------------------------------------------------------------
    echo "<h3>La función mktime</h3>";
    
    // Devuelve: 1655238082
	echo "Muestra la fecha en milisegundos: ".mktime(20 ,21, 22, 6, 14, 2022)."<br />";		

    // Devuelve: "14/06/2022"
	echo "Muestra la fecha en en formato corto: ". date("d/m/Y", mktime(20 ,21, 22, 6, 14, 2022))."<br />";	

    // Devuelve: "02/04/2022"
	echo "Muestra la fecha en formato corto a partir de milisegundos: ".date("d/m/Y", 1648900000)."<p />";		

    //Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix
	echo  "Muestra la fecha en milisegundos a partir de un string: ". strtotime( "2022-04-20" )."<br />";			
	echo  "Muestra la fecha en milisegundos a partir de un string de fecha y hora: ". strtotime( "2022/04/20 20:30:05" )."<br />";

    /*-----------------------------------------------------------------------
    Validar una fecha: bool checkdate ( int $month , int $day , int $year )
    ------------------------------------------------------------------------*/
	echo "<h3>Validar una fecha</h3>";
    if ( checkdate(04, 30, 2022) == true ) echo "Es una fecha correcta <br>";
    else echo "No es una fecha correcta <br/>";
	
    /* -----------------------------------------------
    ejercicio: 1. Utilizar la función con parámetros para verificar una fecha dada 
    ejercicio: 2. Utilizar la función con parámetros para verificar la fecha del dia actual 
    --------------------------------------------------*/
 
  
    
    echo "<h3>Cambiar la zona horaria del servidor</h3>";
  	date_default_timezone_set('Europe/London');			// Establece la zona horaria						
	echo "Ahora 'date_default_timezone_set()' es: ".date_default_timezone_get()."<br/>";	// Muestra la zona horaria establecida	

	echo "Así queda: " . strftime("%A, %d de %B del %Y - %H:%M:%S");
	echo "<br><hr>";
	
    echo "<p>Cambiamos de nuevo la zona horaria</p>";
	date_default_timezone_set('Europe/Madrid');
	echo "Ahora la 'date_default_timezone_set()' es: ".date_default_timezone_get()."<br/>";
	echo "Así queda: " . strftime("%A, %d de %B del %Y - %H:%M:%S")."<br/>";
    //para saber el significado de los comodines visita la http://php.net/manual/es/function.strftime.php

    /*
        1. Elabore un select radio en html que permita cambiar la zona horaria según la comunidad (canarias-Peninsula)
        2. Elabore un desplegable html que permita cambiar la zona horaria según el país
    */

    //-------------------------------------------------------------------------
    echo "<h2>Fecha y hora del Servidor </h2>";

    //Devuelve la fecha/hora local
    echo "Fecha del servidor: ".date("d/m/Y H:i:s")."<br>";	

    //Idéntica a la función date() excepto que la fecha/hora devuelta es en Greenwich Mean Time (GMT).
    echo "Fecha UTC: <strong>".gmdate("d/m/Y H:i:s")."</strong><br>";		

    // Establece la zona horaria
    date_default_timezone_set('UTC');
    
    /*  La hora devuelta dependerá de la zona horaria en que se encuentre el servidor web 	*/
    echo "Fecha del servidor: ".date("d/m/Y H:i:s")." <br>";
    echo "Fecha UTC: ".gmdate("d/m/Y H:i:s") . "<br>";

    echo "<h2>Establecer valores para la fecha</h2>";
    
    //Da formato a la fecha/hora local
    echo "Fecha y hora del servidor: ".date("d/m/Y H:i:s", 1308079282)."<br>";  
    echo "Fecha y hora UTC: ".gmdate("d/m/Y H:i:s", 1308079282)."<br>";		

    echo "<h2>Sumar y restar fechas</h2>";
    $fecha = time();		// en segundos
    // da formato a la fecha
    echo "Fecha: <strong>" . date("d/m/Y H:i:s", $fecha) . "</strong><br>";	
        
    echo "<h3>Sumar días y horas</h3>";
    //24hr x 60min x 60seg = 86400seg
    $fecha = $fecha + 86400 + 7200;      
    echo "Sumamos 1 día y 2 horas: ".date("d/m/Y H:i:s", $fecha)."<p/>";

    echo "<h3>Restar media hora</h3>"; // Restar media hora
    echo "Fecha:". date("d/m/Y H:i:s", $fecha)."<br/>";
    $fecha = $fecha - 1800;
    echo "Restar media hora: ".date("d/m/Y H:i:s", $fecha)."<p >";
        
    echo "<h3>Sumar 30 d&iacuteas</h3>";
    echo "Fecha:".date("d/m/Y H:i:s", $fecha)."<br/>";
    $fecha = $fecha + (30 * 86400);
    echo "Sumar 30 días: ".date("d/m/Y H:i:s", $fecha)."<p/>";

  /*  
    Para mostrar una fecha con formato podemos utilizar también la función de PHP strtotime(), que formatea una fecha/hora a partir de un string. Sintaxis: strtotime(time, now)
  */

   $d=strtotime("10:30pm April 15 2012");
   echo "Creamos la fecha: " . date("Y-m-d h:i:sa", $d);

    //Muestra todos los lunes de los próximos 6 meses
    $fechaInicio=strtotime("Monday");
    $fechaFin=strtotime("+6 month", $fechaInicio);

    while ($fechaInicio < $fechaFin) {
    echo date("M d", $fechaInicio) . "<br>";
    $fechaInicio = strtotime("+1 week", $fechaInicio);
    }
?>  
</body>
</html>