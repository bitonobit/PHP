<!DOCTYPE html>
<html>
<body>

<?php
	$ip = "127.0.0.1";			// IP a validar

	/* La función filter_var() sirve para validar y sabear los datos d entrada
		necesita la variable y el filtro a aplicar
		https://www.w3schools.com/php7/php7_ref_filter.asp
	*/

	if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
	    echo("$ip is a valid IP address");
	} else {
	    echo("$ip is not a valid IP address");
	}
?>

</body>
</html>