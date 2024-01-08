<?php
    namespace models;
    
    class DataBase {

        private $server = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "proyecto";
        private $conected;
        
        public function __construct() {
            $dsn = "mysql:host={$this->server};dbname={$this->database};charset=utf8mb4";
    
            try {
                $this->conected = new PDO($dsn, $this->username, $this->password);
                $this->conected->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "exitos";
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
    
        public function connect() {
            return $this->conected;
        }
    
        public function disconnect() {
            $this->conected = null;
        }

      

          
    }

?>