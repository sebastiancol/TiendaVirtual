<?php

    class Views {

        public function getView($controller,$view)
        {
            $controller = get_class($controller);
            if($controller == "Login"){
                $view = VIEWS.$view.".php";
            }else{
                $view = VIEWS.$controller."/".$view.".php";
                
            }
            require_once($view);
        }
    }
?>