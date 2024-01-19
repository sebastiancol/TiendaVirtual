<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $para = "jhon.hernandezagu@cun.edu.co";
    $asunto = "Mensaje de Contacto de la Web";
    $cuerpo = "Nombre: " . $nombre . "\nEmail: " . $email . "\nMensaje: " . $mensaje;
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
