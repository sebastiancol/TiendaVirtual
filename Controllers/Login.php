<?php
    //use Models;


    class Login extends Controllers{

        private $product;

        public function __construct()
        {
            parent::__construct();
        }

        public function login(){
            $arrdata = $this->model->selectUsers();
            $this->views->getView($this,"register",$arrdata); 
        }

        /*public function carrito($paramns){
           // echo "fucion del carrito".$paramns;
           $carrito = $this->model->getCarrito($paramns);
           echo $carrito;
        }*/

        public function main($paramns)
        {
           $data['page_id'] = 1; 
           $data['page_data']="home"; 
           $data['page_title']="pagina principal"; 
           $data['page_name']="home"; 
           $this->views->getView($this,"login",$data); 
        }

        public function consultar()
        {
            //$data=$user+$pass;
            $result = $this->model->getUser();
            dep($result);
        }     

        
    }
?>