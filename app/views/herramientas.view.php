<<<<<<< HEAD
<?php require_once('layouts/nav.layout.php'); ?>

<section id="herramientas">
    <div class="container">
        <div class="header">
            <h1>Herramientas Interactivas</h1>
            <p>Explora recursos únicos diseñados para ti.</p>
        </div>

        <!-- Presentación en Canva -->
        <div class="tool-section" id="canva">
    <h2>Presentación en Canva</h2>
    <div class="canva-presentation" style="position: relative; width: 100%; height: 0; padding-top: 56.2500%; padding-bottom: 0; box-shadow: 0 2px 8px rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden; border-radius: 8px;">
        <iframe src="https://www.canva.com/design/DAGXcYUldTs/n0dVgg-QmPvZElF1iry5Vg/view?embed"   
            style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0; margin: 0;" 
            frameborder="0" allowfullscreen>
        </iframe> 
    </div>
    <p>Descubre todo sobre el tema con esta presentación interactiva.</p>
</div>


        <!-- Juego en Scratch -->
        <div class="tool-section">
            <h2>Juego en Scratch</h2>
            <div class="scratch-game">
                <iframe src="https://scratch.mit.edu/projects/1100898657/embed"
                    allowtransparency="true"
                    width="800"
                    height="600"
                    frameborder="0"
                    scrolling="no"
                    allowfullscreen>
                </iframe>
            </div>
            <p>¡Pon a prueba tus habilidades con este divertido juego!</p>
        </div>

        <!-- Espacio para App Inventor -->
<div class="tool-section">
    <h2>Aplicación de App Inventor</h2>
    <div class="app-inventor">
        <p>
            Descarga nuestra aplicación diseñada en App Inventor haciendo clic en el siguiente enlace:
        </p>
        <a href="../../public/assets/android/tallerAPK.apk" class="btn-descargar" download="tallerAPK.apk">Descargar APK</a>

        <p>A continuación, puedes ver un video explicativo sobre la aplicación:</p>
        <!-- Reproductor de video MP4 -->
        <video width="30%" height="auto" controls>
            <source src="../../public/assets/img/appinventormoto.mp4" type="video/mp4">
            Tu navegador no soporta el formato de video.
        </video>
    </div>
</div>



        <!-- Video MP4 -->
        <div class="tool-section">
            <h2>Video capcut</h2>
            <div class="mp4-video" style="max-width: 640px; margin: 0 auto;">
                <!-- Reproductor de video MP4 -->
                <video width="50%" height="auto" controls>
                    <source src="../../public/assets/img/editmoto.mp4" type="video/mp4">
                    Tu navegador no soporta el formato de video.
                </video>
            </div>
            <p>Disfruta de este video interactivo sobre el tema.</p>
        </div>

        <div class="tool-section">
    <h2>Juego de Quizizz</h2>
    <div class="quizizz-game" style="max-width: 100%; margin: 0 auto;">
        <iframe src="https://quizizz.com/embed/quiz/6743dcb2f803b8444aa25efd" 
            width="100%" height="1200" frameborder="0" allowfullscreen>
        </iframe>
    </div>
    <p>Participa en este emocionante quiz interactivo.</p>
</div>


    </div>
</section>
=======
<?php

require_once('layouts/nav.layout.php');

?>

<!-- Sección Kahoot -->
<section id="kahoot" class="section">
    <h2 class="section-title">Kahoot</h2>
    <p>Participa en este divertido cuestionario interactivo y pon a prueba tus conocimientos.</p>
    <div class="kahoot-iframe-container">
        <iframe src="https://embed.kahoot.it/565f188e-79bd-4d3d-9788-df800a4fd78a" allowfullscreen></iframe>
    </div>
</section>

<!-- Sección Scratch -->
<section id="scratch" class="section alt-background">
    <h2 class="section-title">Juego en Scratch</h2>
    <p>Explora este juego y diviértete aprendiendo mientras interactúas con un mundo digital creativo.</p>
    <div class="scratch-container">
        <iframe src="https://scratch.mit.edu/projects/1095922244/embed" allowtransparency="true" allowfullscreen></iframe>
    </div>
</section>

<!-- Sección Podcasts -->
<section id="podcasts" class="section">
    <h2 class="section-title">Podcasts Educativos</h2>
    <div class="card-container">
        <!-- Tarjeta Podcast 1 -->
        <div class="card" id="podcast-card-1"> <!-- Nuevo ID único para esta carta -->
            <h3>Historia de la Música Moderna</h3>
            <p>Explora la evolución de la música moderna desde el jazz hasta el pop.</p>
            <audio controls>
                <source src="../../public/assets/audios/podcast1.mp3" type="audio/mpeg">
            </audio>
        </div>
        <!-- Tarjeta Podcast 2 -->
        <div class="card" id="podcast-card-2"> <!-- Nuevo ID único para esta carta -->
            <h3>Los Grandes del Jazz</h3>
            <p>Descubre a las leyendas del jazz como Louis Armstrong y Miles Davis.</p>
            <audio controls>
                <source src="../../public/assets/audios/podcast2.mp3" type="audio/mpeg">
            </audio>
        </div>
        <!-- Tarjeta Podcast 3 -->
        <div class="card" id="podcast-card-3"> <!-- Nuevo ID único para esta carta -->
            <h3>Tendencias en la Música Electrónica</h3>
            <p>Conoce cómo la música electrónica se convirtió en un fenómeno global.</p>
            <audio controls>
                <source src="../../public/assets/audios/podcast3.mp3" type="audio/mpeg">
            </audio>
        </div>
    </div>
</section>

<!-- Sección App Inventor -->
<section id="app-inventor" class="section alt-background">
    <h2 class="section-title">Aplicación Interactiva</h2>
    <p>Descarga nuestra aplicación interactiva diseñada en App Inventor. <br>
        Esta aplicación fue utilizada para grabar los podcast escuchados anteriormente.
    </p>
    <div class="app-container">
        <img src="../../public/assets/img/foto-app.jpg" alt="Imagen de la App" class="app-image">
        <a href="../../public/assets/android/Grabadora_Voz.apk" download>
            <button class="btn-download">Descargar APK</button>
        </a>
    </div>
</section>

<div id="avatar-container">
    <img id="avatar-image" src="../../public/assets/img/avatar.png" alt="Avatar Inteligente">
    <p id="avatar-text">¡Hola! Estoy aquí para ayudarte.</p>
</div>

<script src="../../public/assets//js/scripts.js"></script>
>>>>>>> 3a3aa64 (Aplicación Web con herramientas digitales: Kahoot, Scratch, Podcast, App Inventor y un Agente Inteligente)
