<?php
session_start(); // Inicia la sesión

include 'db.php'; // Conexión a la base de datos

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT id, rol FROM usuarios WHERE usuario = '$usuario'"; // Asegúrate de que la contraseña también se verifique correctamente
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($contrasena, $row['contrasena'])) {
        // Usuario autenticado
        $_SESSION['usuario_id'] = $row['id'];
        $_SESSION['rol'] = $row['rol'];

        header('Location: admin_productos.php'); // Redirige a la página de administración de productos
        exit();
    } else {
        // Contraseña incorrecta
        echo "Contraseña incorrecta";
    }
} else {
    // Usuario no encontrado
    echo "Usuario no encontrado";
}

$conn->close();
?>
