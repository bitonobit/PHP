<?php
    // Obtener el directorio del script
    $folderPath=dirname($_SERVER['SCRIPT_NAME']);
    // Obtiene la ruta completa de la url
    $urlPath=$_SERVER['REQUEST_URI'];

    // Guarda la ruta a partir del / del directorio
    $url=substr($urlPath,strlen($folderPath));
    // Crea una constante con la ruta
    define('URL', $url );
    define('URL_PATH', $folderPath );
?>