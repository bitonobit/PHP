<?php
    /* Creamos una clase para interactuar con la base de datos y hacer operaciones de consultar, insertar, modificar y eliminar de cualquier tabla */
    class Orm{
        protected $id;
        protected $table;
        protected $db;
        // Constructor que necesita un id, el nombre de la tabla y la conexion PDO
        public function __construct($id,$table, PDO $conexion){
            $this->id=$id;
            $this->table=$table;
            $this->db=$conexion;
        }

        public function getAll(){
            // Devuelve la tabla entera
            $stm= $this->db->prepare("SELECT * FROM {$this->table}");
            // Ejecuta la consulta
            $stm->execute();
            // Devuelve el recordset
            return $stm->fetchAll();
        }

        public function getById($id){
            // Devuelve un registro según su id
            $stm= $this->db->prepare("SELECT * FROM {$this->table} WHERE id= :id");
            $stm->bindValue(":id",$id);
            $stm->execute();
            return $stm->fetchAll();
        }

        // mio solo
        public function getByEmail($email, $pass){
            // Devuelve un registro según su email
            $stm= $this->db->prepare("SELECT * FROM {$this->table} WHERE email= :email AND pass=:pass");
            $stm->bindValue(":email",$email);
            $stm->bindValue(":pass",$pass);
            $stm->execute();
            return $stm->fetchAll();
        }
        // mio solo
        

        public function deleteById($id){
            // Borra un registro por su id
            $stm= $this->db->prepare("DELETE FROM {$this->table} WHERE id= {$id}");
            $stm->execute();
            return $stm->fetchAll();
        }

        public function updateById($id, $data){
            // Modifica un registro por su id
            $sql= "UPDATE {$this->table} SET ";
            foreach ($data as $key => $value) {
                $sql.="{$key}=:{$key},";
            }
            $sql=trim($sql, ',');
            $sql.= " WHERE id= :id";
            $stm=$this->db->prepare($sql);
            foreach ($data as $key => $value) {
                $stm->bindValue("{$key}",$value);   
            }
            $stm->bindValue(":id", $id);
            $stm->execute();
            return $stm->fetchAll(); 
        }

        public function insertById($data){
            // Inserta un registro
            $sql= "INSERT INTO {$this->table} (";
            foreach ($data as $key => $value) {
                $sql.="{$key},";
            }
            $sql=trim($sql, ',');
            $sql.=") VALUES (";
            foreach ($data as $key => $value) {
                $sql.=":{$key},";
            }
            $sql=trim($sql, ',');
            $sql.=")";
            $stm=$this->db->prepare($sql);
            foreach ($data as $key => $value) {
                $stm->bindValue("{$key}", $value);   
            }
            $stm->execute();
            return $stm->fetchAll();
        }

        public function paginate($page, $limit){
            // Calculemos el nº de registros a mostrar
            $offset=($page-1)*$limit;

            $rows= $this->db->query("SELECT COUNT(*) FROM {$this->table}")->fetchColumn();

            $sql="SELECT * FROM {$this->table} LIMIT {$offset},{$limit}";
            $stm=$this->db->prepare($sql);
            $stm->execute();
            $pages= ceil($rows/$limit);
            $data= $stm->fetchAll();
            return [
                'data'=> $data,
                'page'=> $page,
                'limit'=> $limit,
                'pages'=> $pages,
                'rows'=> $rows
            ];

        }



    }
