<?php

use models\DataBase;
class Register extends Controllers{

    public function __construct()
    {
        parent::__construct();
    }

    public function main(
        //$paramns
    )
    {
        /*$data['data_page']="home"; 
        $data['data_title']="pagina principal"; 
        $data['data_name']="home"; */
        $this->views->getView($this,"registrar",$data); 
        // require_once('./Views/login.php');
    }

    public function insertar(){

        $data = $this->model->setUser();
    }      
   

    
}
?>