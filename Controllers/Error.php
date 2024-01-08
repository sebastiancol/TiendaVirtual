<?php
    

    class Errors extends Controllers{

        public function __construct()
        {
            parent::__construct();
        }

        public function not_fund(){
            $this->views->getView($this,"error");
        }

       
        
    }

    $notFund = new Errors();
    $notFund->not_fund();
?>