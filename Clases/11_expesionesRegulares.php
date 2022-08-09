<?php
/*PHP proporciona una variedad de funciones que le permiten usar expresiones regulares. Las funciones preg_match(), preg_match_all()y preg_replace()son algunas de las más utilizadas */

$cadena = "Las mañanas son las mejores, pero las tardes también son buenas";
$patron = "/las/i";
//En este ejemplo, / es el delimitador , las es el patrón que se busca y la i es un modificador que hace que la búsqueda no distinga entre mayúsculas y minúsculas.

echo preg_match($patron, $cadena); //dice si una cadena contiene coincidencias con un patrón.
echo "<hr>";
echo preg_match_all($patron, $cadena); //Muestra cuántas coincidencias se encontraron para un patrón en una cadena
echo "<hr>";
echo preg_replace($patron, "LOS", $cadena); //reemplazará todas las coincidencias del patrón en una cadena con otra cadena.

//https://www.w3schools.com/php/php_regex.asp
?>