

<?php  
/* 	
====================================================================================================================================
	/ CARACTERES ESCAPADOS

Los caracteres de expresiones regulares especiales son:  . \ + * ? [ ^ ] $ ( ) { } = ! < > | : - no se representan a sí mismos, 
sino que son interpretados de una forma especial.
	
	\w cualquier carácter "palabra"  
	\s cualquier carácter espacio en blanco
	
El carácter menos (guión) se puede usar para especificar un rango de caracteres en una clase carácter. 
Ej: [d-m] coincide con cualquier letra entre d y m, inclusive.
Ej: $patron2=[a-z]i; 
	
	DELIMITADORES
	/b  Delimita el final de la condición estricta de un patrón, es decir, sin comparamos ‘/compara/b’ 
		con ‘/comparador/’ la búsqueda dará FALSE.
	/i No sensible a las mayúsculas
====================================================================================================================================
*/
	#Ejemplo 01
	$pattern = "%[^\w]suerte\s%";  						// Si cambio la barra / por otro delimitador debe funcionar igual
	if (preg_match($pattern, 'La suerte está echada')): 
		echo ("Si hay ... 'suerte' \r\n ");  
  	else:  
		echo "No hay ... 'suerte' ";  
	endif;
	
	
	#Ejemplo 02
	$cadena1 = "1234567";
	$cadena2 = "abcdefg";
	$patron = "/^[[:digit:]]/";
	if (preg_match($patron, $cadena1)):
		print "<p>La cadena $cadena1 son sólo números.</p>";
	else:
		print "<p>La cadena $cadena1 no son sólo números.</p>";
	endif;
	
	if (preg_match($patron, $cadena2)):
		print "<p>La cadena $cadena2 son sólo números.</p>";
	else:
		print "<p>La cadena $cadena2 no son sólo números.</p>";
	endif;

	#Ejemplo 03. La función preg_match() distingue entre mayúsculas y minúsculas. 
				 // Para que no distinga, debe añadirse el modificador i al final del patrón.
	$cadena = "aaAA";
	$patron1 = "/^[a-z]+$/";
	$patron2 = "/^[a-z]+$/i";
	
	if (preg_match($patron1, $cadena)):
		print "<p>La cadena $cadena son sólo letras minúsculas.</p>";
	else:
		print "<p>La cadena $cadena no son sólo letras minúsculas.</p>";
	endif;
	
	if (preg_match($patron2, $cadena)):
		print "<p>La cadena $cadena son sólo letras minúsculas o mayúsculas.</p>";
	else:
		print "<p>La cadena $cadena no son sólo letras minúsculas o mayúsculas.</p>";
	endif;

	#Ejemplo 04. Esta regla es para permitir usuarios de 4 hasta 12 caracteres de longitud, alfanuméricos y permitir guiones bajos.
	$string = "user_NaME423";
	
	if (preg_match("/^[a-z\\d_]{4,12}$/i", $string)):
		echo "Nombre de usuario: ".$string."<br>";
	endif;
	
	#Ejemplo 05. Esto es para validar números de teléfono el número debe ser de la siguiente manera: ###-###-###
	$string_tlf = "618 999 999";
	$mascara_tlf="/^[0-9]{3,3}[-.]/";
	if (preg_match($mascara_tlf, $string_tlf)):
		echo "Tlf:". $string_tlf . "<br>";
	endif;
	
	#Ejemplo 06. Esto es para validar un email
	$string_email = "7irst-last@domain.co.uk";
	$patron_email="/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/";
	if (preg_match(	$patron_email,$string_email)):
		echo "Email: ".$string_email."<br>";
	endif;

	#Ejemplo 07. Esto es para validar un email
	$string_email = "candy.last@domain.co.uk";
	$patron_email='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
	if (preg_match(	$patron_email,$string_email)):
		echo "Email: ".$string_email."<br>";
	endif;
	
	#Ejemplo 08. Fecha
	$string = "20/12/2007";
	$patron_fecha="/^\\d{1,2}\\/\\d{1,2}\\/\\d{4}$/";
	$patron_fecha="/^[0-9]{1,2} /";
	if (preg_match($patron_fecha, $string)):
		echo "Fecha:".$string."<br>";
	endif;
	
	
	
// remplazar
	$str1 = 'Quiero suprimir la última palabra de esta cadena';
	echo preg_replace("/\W\w+\s*(\W*)$/", "$1", $str1)."<br>";

	#Ejemplo de la función addslashes
	$cadena = "Curso de 'PHP' en escapar la barra inversa (\)";
    $cadena_escapada = addslashes( $cadena );
	echo $cadena_escapada;

?>  


