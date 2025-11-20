<?php
    class PageController extends Controller{
        // Constructor que permite disponer de la conexion a la BD
        public function __construct(PDO $conexion){
            // Permite diponer de la conexión 
        }
        // Página de inicio
        public function inicio(){ 
            // require_once(__DIR__ . '/../Views/inicio.view.php'); equivale al render
            $this->render('inicio',[],'site');
        }

        // Nuevo
        public function insertar(){
            $this->render('insertar',[],'site');     
        }

        // Consultar
        public function consultar(){
            $this->render('consultar',[],'site');    
        }

        // Modificar
        public function modificar(){
            $this->render('modificar',[],'site');
        }

        // Eliminar
        public function eliminar(){
            $this->render('eliminar',[],'site');
        }
        // Login 
        public function login(){
            $this->render('login',[],'site');
        }
        // Acerca 
         public function acerca(){
            $this->render('acerca',[],'site');
        }
          // cursos 
          public function cursos(){
            $this->render('cursos',[],'site');
        }
          // documentacion 
          public function documentacion(){
            $this->render('documentacion',[],'site');
        }
          // Contacto 
          public function contacto(){
            $this->render('contacto',[],'site');
        }
           // GestorCP 
           public function gestorCP(){
            $this->render('gestorCP',[],'site');
        }






    }

?>