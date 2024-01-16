<?php

class Register extends Controllers{

    public function __construct()
    {
        parent::__construct();
    }

    public function main($paramns)
    {
        /*$data['data_page']="home"; 
        $data['data_title']="pagina principal"; 
        $data['data_name']="home"; */
        $this->views->getView($this,"registrar"); 
        // require_once('./Views/login.php');
    }

               
    public function insert($usuario, $contrasena) {
        $query = "INSERT INTO usuarios (usuario, contrasena) VALUES (:usuario, :contrasena)";
        $statement = $this->conexion->prepare($query);
        $statement->bindParam(':usuario', $usuario);
        $statement->bindParam(':contrasena', $contrasena);
        //return 
        $statement->execute();
        if ($statement->execute()) {
            echo "Usuario $usuario creado con éxito.";
            
        } else {
            echo "Error: " ;
        }
        
    }

    
}
?>