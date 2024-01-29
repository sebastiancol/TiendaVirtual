<?php

    class Database extends Conexion
    {

        private $conexion;
        private $strquery;
        private $arrquery;

        function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
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

        //Busca un registro
		public function select(string $query)
		{
			$this->strquery = $query;
        	$result = $this->conexion->prepare($this->strquery);
			$result->execute();
        	$data = $result->fetch(PDO::FETCH_ASSOC);
        	return $data;
		}
        
		//Devuelve todos los registros
		public function select_all(string $query)
		{
			$this->strquery = $query;
        	$result = $this->conexion->prepare($this->strquery);
			$result->execute();
        	$data = $result->fetchall(PDO::FETCH_ASSOC);
        	return $data;
		}

        public function obtenerUsuarios($user,$password) {
            $query = "SELECT * FROM usuarios WHERE usuario = :usuario and contrasena = :contrasena";
            $statement = $this->conexion->prepare($query);
            $statement->bindParam(':usuario', $user);
            $statement->bindParam(':contrasena', $password);
            return $statement->fetch(PDO::FETCH_ASSOC);
            #return $statement->fetchall(PDO::FETCH_ASSOC);
           /* foreach ($statement as $fila) {
                return $fila['usuario'] . '<br>'.$fila['contrasena'];
            }*/
        }


        public function deleteUser (int $id){
            $sql = "DELETE FROM USERS WHERE id=?";
            $arrWhere = array($id);
            $delete = $this->conexion->prepare($sql);
            $del= $delete->execute($arrWhere);
            return $del;
        }

        public function getUsers(){
            $sql= "SELECT * FROM usuarios";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchall(PDO::FETCH_ASSOC);
            return $request;
            /*foreach ($request as $fila) {
                echo $fila['usuario'] . '<br>'.$fila['contrasena'];
            }*/
        }
    }
?>