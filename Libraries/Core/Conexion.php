<?php

class Conexion {

    private $conected;
    
    public function __construct() {
        $dsn = "mysql:host={DB_HOST};dbname={DB_NAME};charset={DB_CHARSET}";

        try {
            $this->conected = new PDO($dsn, DB_USER, DB_PASSWORD);
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