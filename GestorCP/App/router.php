<?php
/* Clase Router para crear l enrutamiento de la aplicación */
class Router{
    // Propiedades
    private $controller;
    private $method;
    // Constructor
    public function __construct(){
        $this->matchRoute();
    }
    // Métodos
    public function matchRoute() {
        // Crea un array con las partes de la ruta, separadas en /
        $url = explode('/', URL);
        if (empty($url[1])){
            $url[1]='page';
            $url[2]='inicio';
        }  
        // print_r($url);
        if (!empty($url[1])){
            //Construimos el controlador correspondiente
            switch ($url[1]) {
                case 'page':
                    # Construimos PageControler
                    $this->controller = $url[1];
                    break;
                case 'cliente':
                    # Construimos ClienteControler
                    $this->controller = $url[1];
                    break;
                case 'usuario':
                    # Construimos UsuarioControler
                    $this->controller = $url[1];
                    break;
                default:
                    # Construimos ErrorControler
                    $this->controller = 'Page';
                    $url[2]=$url[1];
                    break;
            }
                if (!empty($url[2])) {
                    # Ponemos el método
                    $this->method = $url[2];
                }

        } else {
            $this->controller = 'Page';
            $this->method = 'inicio';
        }

        $this->controller = $this->controller . 'Controller';

        require_once(__DIR__ . '/Controllers/' .  $this->controller . '.php');
    }
    public function run(){
        // Creamos una instancia de la clase Database
        $database = new Database();
        // Nostraemos la conexion
        $conexion = $database->getConexion();
        // Pasamos la conexion al controlador
        $controller = new $this->controller($conexion);
        $method = $this->method;
        $controller->$method();
    }
}

    // Fuente de inspiración XD :  https://www.youtube.com/watch?v=c3Noj5pJL60
    // Nota: hay cambios porque está perzonalizado para mi proyecto