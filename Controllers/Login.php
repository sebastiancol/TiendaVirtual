<?php
    

    class Login extends Controllers{

        public function __construct()
        {
            parent::__construct();
        }

        public function usuario(){
            //echo "mensaje desde el metodo del controlador";
        }

        public function carrito($paramns){
           // echo "fucion del carrito".$paramns;
           $carrito = $this->model->getCarrito($paramns);
           echo $carrito;
        }

        public function main($paramns){
           $this->views->getView($this,"login"); 
           // require_once('./Views/login.php');
        }

        
    }
?>