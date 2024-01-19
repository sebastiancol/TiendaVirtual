<?php require ('./include/header.php')?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $para = "sebastian.morenoc@cun.edu.co";
    $asunto = "Mensaje de Contacto de la Web";
    $cuerpo = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nMensaje: " . $mensaje;
    $cabeceras = "From: " . $email;

    // Enviar el correo
    if (mail($para, $asunto, $cuerpo, $cabeceras)) {
        echo "Mensaje enviado con éxito";
    } else {
        echo "Error al enviar el mensaje";
    }
} else {
    echo "Solicitud no válida";
}
?>



    <div class="row m-5">
        <div class="col-8 mx-auto"> 
            <div class="card">
                <h3 class="card-title text-center">CONTACTO</h3>
                <div class="card-body">
                    <form action="contacto.php" method="POST" class="color">
                        <div class="form-group">
                            <label for="doc"></label>
                            <input type="text" id="doc" name="nombre" placeholder="NOMBRE" class="form-control" required pattern="[0,9].{6,10}">
                        </div>
                        <div class="form-group">
                            <label for="nom" ></label>
                            <input required type="text" id="nom" name="correo" placeholder="CORREO" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="fec"></label>
                            <input required type="textarea" id="fec" name="mensaje" placeholder="MENSAJE" class="form-control ">
                        </div>

                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-success btn-block entry">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>

<?php require ('./include/footer.php')?>