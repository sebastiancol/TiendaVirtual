<?php

use models\DataBase;
class Catalogo extends Controllers{

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
        $this->views->getView($this,"catalogo"); 
        
    }

       

    
}
?>