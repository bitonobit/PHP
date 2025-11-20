<?php
    // Requerimos la clase modelo
    require_once(__DIR__ . '/../Models/Usuario.php');
   
    class UsuarioController extends Controller{
        private $usuarioModel;
        public function __construct(PDO $conexion){
            // Creamos una instancia del modelo
            $this->usuarioModel= new Usuario($conexion);
        }

        public function inicio(){
            //Verifica que el usuario exista
            $usuarios= $this->usuarioModel->getByEmail($_POST["email"],$_POST["pass"]);
            if(!empty($usuarios)){
                // Si existe muestra la página de bienvenida
                 $this->render('usuario', $usuarios[0] , 'site');   
            }else{
                // Debería volver al login
                $this->render('salir', [] , 'site'); 
            }
            
        }
       

    }