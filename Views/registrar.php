<?php require ('./include/header.php');?>

<?php 
    require_once('../models/autoload.php');
    $create = new User();

    if(isset($_POST['save'])){
        $usuario=$_POST['user'];
        $password=$_POST['password'];
        $create->insert($usuario, $password);
    }
    
?>
    
    <div class="row m-5">
        <div class="col-8 mx-auto"> 
            <div class="card">
                <h3 class="card-title text-center">REGISTAR</h3>
                <div class="card-body">
                    <form action="registrar.php" method="POST" class="color">
                        <div class="form-group">
                            <label for="doc"></label>
                            <input type="text" id="doc" name="user" placeholder="USUARIO" class="form-control" required >
                        </div>
                        <div class="form-group">
                            <label for="nom" ></label>
                            <input required type="password" id="nom" name="password" placeholder="CONTRASEÑA" class="form-control">
                        </div>
                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success btn-block entry" name="save">INGRESAR</button>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>


<?php require ('./include/footer.php');?>