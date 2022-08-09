<?php
   // Inicio de sesion 
   session_start();
   
   if(isset($_POST["acceso"])){					// Verifica que no este vacío
		if ($_POST["acceso"]=="yes") {
		   if ($_POST["uname"]=="Aday" && $_POST["pword"]=="1234") {
			     $_SESSION["ingresar"]="Yes";					
            //Es un array asociativo que contiene variables de sesión disponibles para el script actual.
		   } else {
				  echo "<p>El Usuario o el Password es incorrecto, por favor inténtalo de nuevo</p>";
				  $_SESSION["ingresar"]="No";
			}
		}   
   
    }
   
	
    if($_SESSION["ingresar"]=="Yes") {
         echo "Bienvenido";
    }else {
        $req_URL = $_SERVER["REQUEST_URI"];

//Hace el formulario
print <<<GROUP1
<form action="$req_URL" method="POST">
<p>Username: <input type="text" name="uname"></p>
<p>Password: <input type="password" name="pword"></p>
<input type="hidden" name="acceso" value="yes">
<p><input type="submit" value="Login"></p>
</form>
GROUP1;
    exit;
   }
?>