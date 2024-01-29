<?php

    class LoginModel extends Database{

        public function __construct()
        {
            //echo "Mensaje desde el modelo Home";
        }

        /*public function getCarrito($params){
            return "Datos del carrito N°".$params;
        }*/

        public function getUser() {
          
            $sql = "select * from usuarios";
            $request = $this->select_all($sql);
            return $request;
        }
    }
?>
