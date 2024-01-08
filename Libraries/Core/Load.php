<?PHP
    
$controllerfile="Controllers/".$controller.".php";
if(file_exists($controllerfile))
{
require_once($controllerfile);
$controller= new $controller();
if(method_exists($controller,$method))
{
    $controller-> {$method}($params);
}else{
    //echo  "method not exits";
    require_once("Controllers/Error.php");
}
}else{
require_once("Controllers/Error.php");
}
?>