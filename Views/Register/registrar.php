<?php require_once ('./views/include/header.php');
//use models\DataBase;

?>

<?php 
    //require_once('../models/autoload.php');
   

    /*if(isset($_POST['save'])){
        $usuario=$_POST['user'];
        $password=$_POST['password'];
        $create->insert($usuario, $password);
    }*/

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        session_start();

        $usuario=$_POST['user'];
        $password=$_POST['password'];
        
        $create = new DataBase();
        $create->insert($usuario, $password);
        /*$loginValidate=$create->insert($usuario, $password);
        if($loginValidate){
            echo "Inicio de sesión exitoso";
        }else{
            echo "Inicio de sesión invalido";
        }*/
        
    }

      /*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        session_start();
        $user=$_POST['user'];
        $password=$_POST['password'];
        
        $login = new User();
        $loginValidate=$login->obtenerUsuarios($user,$password);
        
        if($loginValidate){
            echo "Inicio de sesión exitoso";
        }else{
            echo "Inicio de sesión invalido";
        }
    } else {
        //echo "Solicitud no válida";
        header('Location: login.html');
    }*/
    
?>
    
    <div class="row m-5">
        <div class="col-8 mx-auto"> 
            <div class="card">
                <h3 class="card-title text-center">REGISTAR</h3>
                <div class="card-body">
                    <form action="./login.php" method="POST" class="color">
                        <div class="form-group">
                            <label for="doc"></label>
                            <input type="text" id="doc" name="user" placeholder="USUARIO" class="form-control" required >
                        </div>
                        <div class="form-group">
                            <label for="nom" ></label>
                            <input required type="password" id="nom" name="password" placeholder="CONTRASEÑA" class="form-control">
                        </div>
                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success btn-block entry" name="save">REGISTRAR</button>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>


<?php require_once ('./views/include/footer.php');?>