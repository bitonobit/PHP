<?php 
//$_SERVER. Es un array asociativo que contiene variables de sesión disponibles para el script actual. 
// Contiene información sobre encabezados, rutas de acceso y ubicaciones de guiones.
// Lista de funciones http://php.net/manual/es/ref.session.php
echo "Esta es PHP_SELF:" . $_SERVER['PHP_SELF'];
echo "<br>";
echo "Esta es SERVER_NAME:" . $_SERVER['SERVER_NAME'];
echo "<br>";
echo "Esta es HTTP_HOST:" . $_SERVER['HTTP_HOST'];
echo "<br>";
echo "Esta es HTTP_REFERER:" . $_SERVER['HTTP_REFERER'];
echo "<br>";
echo "Esta es HTTP_USER_AGENT:" . $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "Esta es SCRIPT_NAME:" . $_SERVER['SCRIPT_NAME'];

/*
$_SERVER['PHP_SELF']			Devuelve el nombre de archivo del script que se está ejecutando actualmente
$_SERVER['GATEWAY_INTERFACE']	Devuelve la versión del Common Gateway Interface (CGI) que el servidor está utilizando
$_SERVER['SERVER_ADDR']			Devuelve la dirección IP del servidor host
$_SERVER['SERVER_NAME']			Devuelve el nombre del servidor host
$_SERVER['SERVER_SOFTWARE']		Devuelve la cadena de identificación del servidor 
$_SERVER['SERVER_PROTOCOL']		Devuelve el nombre y la revisión del protocolo de información
$_SERVER['REQUEST_METHOD']		Devuelve el método de solicitud utilizado para acceder a la página
$_SERVER['REQUEST_TIME']		Devuelve la marca de tiempo del inicio de la solicitud 
$_SERVER['QUERY_STRING']		Devuelve la cadena de consulta si se accede a la página a través de una cadena de consulta
$_SERVER['HTTP_ACCEPT']			Devuelve el encabezado Accept de la solicitud actual
$_SERVER['HTTP_ACCEPT_CHARSET']	
$_SERVER['HTTP_HOST']			Devuelve el encabezado Host de la solicitud actual
$_SERVER['HTTP_REFERER']		Devuelve la URL completa de la página actual (no es fiable porque no todos los agentes de usuario lo admiten)
$_SERVER['HTTPS']				La secuencia de comandos se consulta a través de un protocolo HTTP seguro
$_SERVER['REMOTE_ADDR']			Devuelve la dirección IP desde donde el usuario está viendo la página actual
$_SERVER['REMOTE_HOST']		 	Devuelve el nombre de Host desde donde el usuario está viendo la página actual
$_SERVER['REMOTE_PORT']			Devuelve el puerto que se está utilizando en la máquina del usuario para comunicarse con el servidor web
$_SERVER['SCRIPT_FILENAME']		Devuelve la ruta de acceso absoluta del script que se está ejecutando actualmente
$_SERVER['SERVER_ADMIN']		Devuelve el valor dado a la directiva SERVER_ADMIN en el archivo de configuración del servidor web (si el script se ejecuta en un host virtual, será el valor definido para ese host virtual) 
$_SERVER['SERVER_PORT']			Devuelve el puerto en la máquina servidor que está siendo utilizado por el servidor web para la comunicación (como 80)
$_SERVER['SERVER_SIGNATURE']	Devuelve la versión del servidor y el nombre del host virtual que se agregan a las páginas generadas por el servidor
$_SERVER['PATH_TRANSLATED']		Devuelve la ruta del sistema de archivos a la secuencia de comandos actual
$_SERVER['SCRIPT_NAME']			Devuelve la ruta del script actual
$_SERVER['SCRIPT_URI']			Devuelve el URI de la página actual
*/
?>