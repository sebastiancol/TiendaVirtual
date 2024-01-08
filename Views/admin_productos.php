<?php
session_start();


if (!isset($_SESSION['usuario_id']) || $_SESSION['rol'] != 'administrador') {
    header('Location: login.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administración de Productos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Administración de Productos</h1>
    </header>

    <section>
        <a href="agregar_producto.php">Agregar Producto</a>
        <a href="modificar_producto.php">Modificar Producto</a>
        <a href="borrar_producto.php">Borrar Producto</a>
    </section>

    <footer>
        <p>&copy; 2023 Tienda de Ropa</p>
    </footer>
</body>
</html>
