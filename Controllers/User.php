<?php
    //namespace Controller;
    //require_once('../autoload.php');
    
    //use models\DataBase;



    class User extends DataBase{

        private $doc;
        private $strNombre;
        private $strApellido;
        private $intTelefono;
        private $direccion;
        private $strEmail;
        private $strPassword;
        private $conexion;
       

        public function __construct()
        {   
            
            $this->conexion= new DataBasev2();
            $this->conexion= $this->conexion->connect();
           
                       
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
        

        public function getUsers(){
            $sql= "SELECT * FROM usuarios";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchall(PDO::FETCH_ASSOC);
            return $request;
            /*foreach ($request as $fila) {
                echo $fila['usuario'] . '<br>'.$fila['contrasena'];
            }*/
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

        /*public function updateUser (int $id ,string $nombre, int $telefono, string $email, string $password){
            $this->strNombre= $nombre;
            $this->intTelefono= $telefono;
            $this->strEmail= $email;
            $this->strPassword= $password;
            $sql = "UPDATE user set nombre=?, telefono=?, email=? where id=$id";
            $update = $this->conexion->prepare($sql);
            $arrData = array($this->strNombre,$this->intTelefono, $this->srtEmail, $this->srtPassword);
            $resExecute = $update->execute($arrData);
            return $resExecute;

        }*/

        public function getUsert(int $id){
            $sql= "SELECT * FROM usuarios where id=? ";
            $arrWhere = array($id);
            $query = $this->conexion->prepare($sql);
            $query->execute($arrWhere);
            $request = $query->fetch(PDO::FETCH_ASSOC);
            return $request;
        }

        public function obtenerUsuarioPorId($usuario, $contrasena) {
            $query = "SELECT * FROM usuarios WHERE usuario = :usuario and contrasena = :contrasena";
            $statement = $this->conexion->prepare($query);
            $statement->bindParam(':usuario', $usuario);
            $statement->bindParam(':contrasena', $contrasena);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        }

        public function deleteUser (int $id){
            $sql = "DELETE FROM USERS WHERE id=?";
            $arrWhere = array($id);
            $delete = $this->conexion->prepare($sql);
            $del= $delete->execute($arrWhere);
            return $del;
        }




    }


?>