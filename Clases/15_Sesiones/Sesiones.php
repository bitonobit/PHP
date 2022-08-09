<?php
/*  IMPORTANTE: la función session_start() debe ser lo primero en su documento. Antes de cualquier etiqueta HTML.
Las sesiones son una forma sencilla de almacenar datos para usuarios de manera individual usando un ID de sesión único. Esto se puede usar para hacer persistente la información de estado entre peticiones de páginas. Los ID de sesiones normalmente son enviados al navegador mediante cookies de sesión, y el ID se usa para recuperar los datos de sesión existente. La ausencia de un ID o una cookie de sesión permite saber a PHP para crear una nueva sesión y generar un nuevo ID de sesión.

$_SESSION: Es un array asociativo que contiene variables de sesión disponibles para el script actual
https://www.php.net/manual/es/ref.session.php
*/

session_start(); 	//Inicia una nueva sesión o reanudar la existente. Sintaxis: bool session_start ([ array $options = [] ] )

?>
<!DOCTYPE html>
<html>
<body>

<?php
	session_start(); 	
	//Inicia una nueva sesión o reanuda la existente. 
	// Guarda las sesiones en el arreglo
	$_SESSION["Uncolor"] = "Rojo";
	$_SESSION["Unanimal"] = "Jirafa";
	$_SESSION['instante']   = time();

	echo "Sesion iniciada a las: " . $_SESSION['instante'];
	echo date("d/m/Y H:i:s", $_SESSION['instante']);

	// vaciar o eliminar la session 
	 session_unset(); 
	 session_destroy(); 

?>

</body>
</html>