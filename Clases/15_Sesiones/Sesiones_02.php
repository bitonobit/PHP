<?php
// phpinfo() --> Muestra la información de php.ini
//Se crea la sesión.
session_start();
//Si la sesión ya está iniciada, se incrementa el valor.
if (empty($_SESSION['nVisitas'])){
	$_SESSION['nVisitas']=1;
}
//Pero, si es la primera vez que se crea la sesión, se inicializa la variable.
else{
	++$_SESSION['nVisitas'];
}

	echo "<h2>Hola, hola vecinito está es la vez número  "
		.$_SESSION['nVisitas']." que te veo por aquí.</h2>";

//Al llegar a 5 sesiones, se destruye la sesión.
if($_SESSION['nVisitas']==5){
	session_destroy();
}


?>

</body>
</html>