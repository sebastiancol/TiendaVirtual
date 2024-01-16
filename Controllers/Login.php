<?php
    

    class Login extends Controllers{

        public function __construct()
        {
            parent::__construct();
        }

        public function usuario(){
            //echo "mensaje desde el metodo del controlador";
        }

        /*public function carrito($paramns){
           // echo "fucion del carrito".$paramns;
           $carrito = $this->model->getCarrito($paramns);
           echo $carrito;
        }*/

        public function main($paramns){
           $data['data_page']="home"; 
           $data['data_title']="pagina principal"; 
           $data['data_name']="home"; 
           $this->views->getView($this,"login",$data); 
           // require_once('./Views/login.php');
        }

        
    }
?>