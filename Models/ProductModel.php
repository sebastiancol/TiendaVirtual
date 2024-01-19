<?php

    
    class ProductModel extends DataBase{

        //private $conexion;
        //private $data;

        function __construct()
        {   
           // $this->data= new Database();
            parent::__construct();
        }

        public function selectusers() {
          
            $sql = "select * from usuarios";
            $request = $this->getUsers($sql);
            return $request;
            //echo $request;
        }
        
    }
?>