<?php
    class Database {
        private $conexion;
        public function __construct(){
            /* PDO::__construct — Crea una instancia de PDO que representa una conexión a una base de datos.
            public PDO::__construct(
                string $dsn,
                string $username = ?,
                string $password = ?,
                array $options = ?
            )
            */
                try {
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ];
                // Crea la conexión
                $this->conexion = new PDO("mysql:host=localhost;dbname=mvc", "root", "whays", $options);
                // Ejecuta la consulta
                $this->conexion->exec("SET CHARACTER SET UTF8");
                    // echo "Conexión realizada Satisfactoriamente";
                }
                catch(PDOException $error){
                    //  echo " Error: ". $error->getMessage();
                }
            }

            public function getConexion(){
                return $this->conexion;
            }

            public function closeConexion(){
                $this->conexion=null;
            }

    }
