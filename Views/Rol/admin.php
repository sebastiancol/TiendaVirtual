<?php
//verificar si el usuario ha iniciado sesión y si tiene permisos de administrador
if (!isset($_SESSION['usuario_id']) || $_SESSION['contrasena'] != 'administrador') { header('Location: login.php'); exit(); }

// Incluir conexión a la base de datos
include 'db.php';
?>

<?php require ('./include/header.php');?>
    <header>
        <h1>Página de Administración</h1>
        <!-- Menú de navegación -->
    </header>

    <section>
        <h2>Gestión de Productos</h2>
        <a href="agregar_producto.php">Agregar Producto</a>
        <a href="modificar_producto.php">Modificar Producto</a>
        <a href="borrar_producto.php">Borrar Producto</a>
    </section>

    <section>
        <h2>Gestión de Usuarios</h2>
        <a href="crear_usuario.php">Crear Nuevo Usuario</a>
    </section>

<?php require ('./include/footer.php');?>