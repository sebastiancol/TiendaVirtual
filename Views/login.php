<?php require_once ('./views/include/header.php');?>


<?php 
    //require_once('../models/autoload.php');
    
   

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
    
    //print_r($data);
    //echo base_url();
    
    //echo passGenerator();
    //echo date_default_timezone_get();
    //print(count($data));
?>

    <div class="row m-5">
        <div class="col-8 mx-auto"> 
            <div class="card">
                <h3 class="card-title text-center">INGRESO</h3>
                <div class="card-body">
                    <form action="login.php" method="POST" class="color" >
                        <div class="form-group">
                            <label for="doc"></label>
                            <input type="text" id="doc" name="user" placeholder="USUARIO" class="form-control" required >
                        </div>
                        <div class="form-group">
                            <label for="nom" ></label>
                            <input required type="password" id="nom" name="password" placeholder="CONTRASEÑA" class="form-control">
                        </div>
                        <div class="form-group mt-5">
                            <!--<button type="submit" class="btn btn-success btn-block entry" name="save2">INGRESAR</button>-->
                            
                            <input type="submit" value="Iniciar Sesión" class="btn btn-success btn-block entry">
                            <span>or <a href="../Register/registrar" class="btn btn-primary btn-block entry">REGISTRAR</a></span>
                            
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>

    <!--<input type="text" id="messageInput" placeholder="Escribe un mensaje">
    <button onclick="sendMessage()">Enviar</button>
    <ul id="messageList"></ul>-->

    <!--<script>
        const socket = new WebSocket('ws://localhost:8082');

        socket.onmessage = (event) => {
            const messageList = document.getElementById('messageList');
            const listItem = document.createElement('li');
            listItem.textContent = event.data;
            messageList.appendChild(listItem);
        };

        function sendMessage() {
            const messageInput = document.getElementById('messageInput');
            const message = messageInput.value;
            socket.send(message);
            messageInput.value = '';
        }
    </script>-->

<?php require_once ('./views/include/footer.php');?>