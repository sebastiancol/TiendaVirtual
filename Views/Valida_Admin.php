<?php
include 'db.php';

$usuario = 'admin';
$contrasena = password_hash('tuContraseña', PASSWORD_DEFAULT);
$rol = 'administrador';

$sql = "INSERT INTO usuarios (usuario, contrasena, rol) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $usuario, $contrasena, $rol);

if ($stmt->execute()) {
    echo "Usuario administrador creado con éxito.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
