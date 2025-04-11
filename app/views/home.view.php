<<<<<<< HEAD
<?php require_once('layouts/nav.layout.php'); ?>

<!-- Slider -->
<section class="slider">
    <div class="text-overlay">
        <h1>Explora el Mundo de las Motos</h1>
        <p>Descubre los mejores modelos, accesorios y eventos</p>
    </div>
    <img src="../../public/assets/img/slider1.jpg" alt="Motos en acción">
</section>

<!-- Banners -->
<section class="banner">
<div class="banner-item" onclick="window.location.href='http://localhost/mundomotos/public/user/herramientas#canva';" style="cursor: pointer;">
    <img src="../../public/assets/img/banner1.jpg" alt="Modelos de motos">
    <h3>Modelos Destacados</h3>
    <p>Encuentra las motos más innovadoras del mercado.</p>
</div>

<div class="banner-item" onclick="window.location.href='https://zonabiker.com.co';" style="cursor: pointer;">
    <img src="../../public/assets/img/banner2.jpg" alt="Accesorios para motos">
    <h3>Accesorios Premium</h3>
    <p>Complementa tu moto con lo mejor en equipamiento.</p>
</div>

    <div class="banner-item" onclick="window.location.href='https://www.instagram.com/eventosamotor/?hl=es';" style="cursor: pointer;">
    <img src="../../public/assets/img/banner3.jpg" alt="Eventos de motos">
    <h3>Eventos y Rutas</h3>
    <p>Únete a la comunidad en los mejores eventos y recorridos.</p>
</div>

</section>

<!-- Divs con texto e imagen -->
<section class="text-image-section">
    <div class="text-image-item">
        <img src="../../public/assets/img/div1.jpg" alt="Moto deportiva">
        <div class="content">
            <h3>Motos Deportivas</h3>
            <p>Vive la adrenalina con nuestras motos deportivas de última generación.</p>
        </div>
    </div>
    <div class="text-image-item">
        <img src="../../public/assets/img/div2.jpg" alt="Casco de moto">
        <div class="content">
            <h3>Equipamiento Seguro</h3>
            <p>Protección garantizada con cascos, guantes y ropa especializada.</p>
        </div>
    </div>
    <div class="text-image-item">
        <img src="../../public/assets/img/div3.jpg" alt="Ruta en moto">
        <div class="content">
            <h3>Aventuras en Ruta</h3>
            <p>Explora los mejores paisajes en tu motocicleta, con rutas diseñadas para ti.</p>
        </div>
    </div>
=======
<?php

require_once('layouts/nav.layout.php');

?>

<div id="banner">
    <br><br><br>
    <h1>Bienvenido a Notas y Ecos</h1>
    <p class="lead">Explora, descubre y disfruta de la música que marca momentos.</p>
</div>

<!-- Carrusel de imágenes -->
<div id="carouselMusica" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= URL_PATH ?>/assets/img/music1.jpg" alt="Imagen Música 1">
        </div>
        <div class="carousel-item">
            <img src="<?= URL_PATH ?>/assets/img/music2.jpg" alt="Imagen Música 2">
        </div>
        <div class="carousel-item">
            <img src="<?= URL_PATH ?>/assets/img/music3.jpg" alt="Imagen Música 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselMusica" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselMusica" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>

<!-- Sección de Recomendaciones -->
<section id="recomendaciones" class="container mt-3">
    <h2>Recomendaciones Musicales</h2>
    <div class="row card-recomendaciones"> <!-- Aquí se mantiene la clase general -->
        <div class="col-md-4">
            <div class="card" id="home-card-1"> <!-- Nuevo ID único para esta carta -->
                <img src="<?= URL_PATH ?>/assets/img/album1.jpg" class="card-img-top" alt="Álbum 1">
                <div class="card-body">
                    <h5 class="card-title">Sonidos para el Alma</h5>
                    <p class="card-text">Melodías que te transportan a otro mundo, ideal para momentos de introspección.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" id="home-card-2"> <!-- Nuevo ID único para esta carta -->
                <img src="<?= URL_PATH ?>/assets/img/album2.jpg" class="card-img-top" alt="Álbum 2">
                <div class="card-body">
                    <h5 class="card-title">Vibras Urbanas</h5>
                    <p class="card-text">Beats y letras que narran historias reales y conectan con la vida diaria.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" id="home-card-3"> <!-- Nuevo ID único para esta carta -->
                <img src="<?= URL_PATH ?>/assets/img/album3.jpg" class="card-img-top" alt="Álbum 3">
                <div class="card-body">
                    <h5 class="card-title">Clásicos de Siempre</h5>
                    <p class="card-text">Música que ha resistido el paso del tiempo y sigue inspirando a generaciones.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Banners Informativos -->
<section id="banners" class="container">
    <div class="banner-item">
        <h3>Conecta con tus Emociones</h3>
        <p>La música es un lenguaje universal que nos une y nos permite expresar lo inexpresable.</p>
    </div>
    <div class="banner-item">
        <h3>Explora Nuevos Géneros</h3>
        <p>Desde el jazz hasta el rock, pasando por el reguetón y el indie: hay algo para todos.</p>
    </div>
    <div class="banner-item">
        <h3>Crea tu Propio Ritmo</h3>
        <p>Descubre canciones que complementan tus días y se vuelven parte de tu historia.</p>
    </div>
>>>>>>> 3a3aa64 (Aplicación Web con herramientas digitales: Kahoot, Scratch, Podcast, App Inventor y un Agente Inteligente)
</section>