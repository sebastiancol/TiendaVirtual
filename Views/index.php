<?php require ('app/views/include/header.php')?>

<div class="row m-4">

<header class="p-12 text-bg-dark">
    <h1 class="text-center mt-3">INICIO</h1>
    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li class="nav-item"><a href="./index.php">Inicio</a></li>
        <li class="nav-item"><a href="./app/views/productos.php">Productos</a></li>
        <li class="nav-item"><a href="./app/views/contacto.php">Contáctenos</a></li>
        <li class="nav-item"><a href="./app/views/login.php">Login</a></li>
    </ul>
</header>

</div>

<div  class="row m-8">

    <div class="col m-6">
        <section class="index">
            <article>
                <h2>Promociones Actuales</h2>
                <p>¡Descubre nuestras últimas ofertas y descuentos exclusivos!</p>
                <img src="app/assets/imagenes/promo.jpg" alt="Promoción 1" width="350px" height="400px">
            </article>
        </section>
    </div>
   
    <div class="col m-6">
        <section class="index">
            <article>
            <h2>Lo más Nuevo</h2>
            <p>estrena con nosotros... ¡Siempre tenemos el mejor estilo!</p>
            <img src="app/assets/imagenes/Estilo1.jpg" alt="Estilo 1" width="350px" height="400px">
            </article>
            
        </section>
    </div>
    

</div>    


<?php require ('app/views/include/footer.php')?>