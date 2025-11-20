<?php
    class Router{
        private $controller;
        private $method;
        public function __construct(){
            $this->matchRoute();
        }
        public function matchRoute(){
            $url=explode('/', URL);
            print_r($url);
            if (empty($url[1])){
                $url[1]='page';
                $url[2]='inicio';
            }
            // $this->controller=!empty($url[1])? $url[1] : 'Page';
            // $this->method=!empty($url[2])? $url[2] : 'inicio';
            $this->controller=$this->controller . 'Controller';
            // $this->controller='PageController';
            require_once(__DIR__ . '/Controllers/' .  $this->controller . '.php');
            // $this->method=!empty($url[1])? $url[1] : 'inicio';
        }
        public function run(){
            // Creamos una instancia de la clase Database
            $database= new Database();
            // Nostraemos la conexion
            $conexion=$database->getConexion();
            // Pasamos la conexion al controlador
            $controller= new $this->controller($conexion);
            $method= $this->method;
            $controller->$method();
        }

    }

    // https://www.youtube.com/watch?v=c3Noj5pJL60