<?php

    class Views 
    {
        public function getView($controller,$view,$data="")
        {
            $controller = get_class($controller);
            if($controller == "Login" || $controller == "Register" || $controller == "Catalogo" || $controller == "Products"
            || $controller == "User" )
            {
                $view = "Views/".$view.".php";
            }else{
                $view = "Views/".$controller."/".$view.".php";
                
            }
            require_once($view);
        }
    }
?>