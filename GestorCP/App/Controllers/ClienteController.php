<?php
   // Incluimos el modelo
    require_once(__DIR__ . '/../Models/Cliente.php');
    class ClienteController extends Controller{
      // Propiedades
        private $clienteModel;
      // Construcctor
        public function __construct(PDO $conexion){
            $this->clienteModel= new Cliente($conexion);
        }
      // Métodos
        public function inicio(){
           $this->render('cliente', [], 'site');  
         }

         public function table(){
            $res= new Result();
            $clientes= $this->clienteModel->getAll();
            $res->success=true;
            $res->result=$clientes;
            $res->message='Aquí va el mensaje';
            echo json_encode($res) ;
         }

         public function new(){
            // Nuevo cliente
            $this->render('clienteNew', [], 'site');
         }
        
         public function edit(){
            // Editar un cliente
            $id=$_GET['id'];
            $cliente = $this->clienteModel->getById($id);
            $this->render('clienteNew', [ 'cliente'=> $cliente ], 'site');
         } 

         public function create(){
           // Inserta un cliente 
           $postData= file_get_contents('php://input');
           $body= json_decode($postData, true);
           $this->clienteModel->insertById([
            'nombre'=>$body['nombre'],
            'apellidos'=>$body['apellidos'],
            'direccion'=>$body['direccion'],
           ]);
           $res->success=true;
           $res->message='El registro fue insertado correctamente';
           echo json_encode($res);
         } 

         public function update(){
            // Actualiza un cliente
            $res= new Result();
            $postData= file_get_contents('php://input');
            $body= json_decode($postData, true);
            $this->clienteModel->updateById($body['id'],[
             'nombre'=>$body['nombre'],
             'apellidos'=>$body['apellidos'],
             'direccion'=>$body['direccion'],
            ]);
            $res->success=true;
            $res->message='El registro fue actualizado correctamente';
            echo json_encode($res);
         } 

         public function delete(){
            // Borra un cliente
            $res= new Result();
            $postData= file_get_contents('php://input');
            $body= json_decode($postData, true);
            $this->clienteModel->deleteById($body['id']);
            $res->success=true;
            $res->message='El registro fue eliminado correctamente';
            echo json_encode($res);
         }

         public function validateInput(){
            // Valida un input
            
         }
        
    }