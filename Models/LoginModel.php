<?php

    class LoginModel extends Database{

        public function __construct()
        {
            //echo "Mensaje desde el modelo Home";
        }

        /*public function getCarrito($params){
            return "Datos del carrito N°".$params;
        }*/

        public function selectUsers() {
          
            //$sql = "select * from usuarios";
            $request = $this->getUsers();
            return $request;
            //echo $request;
        }
    }
?>
