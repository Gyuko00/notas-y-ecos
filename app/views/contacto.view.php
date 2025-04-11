
<?php

require_once('layouts/nav.layout.php');

<section id="contacto">
    <!-- Banner de texto -->
    <div class="banner-contacto">
        <h1>Contáctanos</h1>
        <p>¡Estamos aquí para ayudarte! Completa el formulario y responderemos a la brevedad.</p>
    </div>

    <!-- Contenido del formulario -->
    <div class="contacto-contenedor">
        <!-- Imagen decorativa -->
        <div class="imagen-contacto">
            <img src="../../public/assets/img/banner-contacto.jpeg" alt="Imagen de una motocicleta">
        </div>

        <!-- Formulario -->
        <div class="formulario-contacto">
            <h2>Envíanos tu mensaje</h2>
            <p>Queremos saber de ti. Completa los campos y haz clic en enviar.</p>
            <form action="contacto" method="POST">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" placeholder="Escribe tu nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Escribe tu correo" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>
                </div>
                <button type="submit" class="btn-enviar">Enviar Mensaje</button>
            </form>
        </div>
    </div>

require_once('layouts/nav.layout.php');

require_once '/xampp/htdocs/notas&ecos/vendor/autoload.php'; // Cargar PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['message']);

    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP de Gmail

            // Tu contraseña o contraseña de aplicación


            // Configuración del correo
            // Tu correo de destino

            $mail->isHTML(true);
            $mail->Subject = 'Nuevo mensaje de contacto';
            $mail->Body    = "
                <h3>Nuevo mensaje desde el formulario de contacto:</h3>
                <p><strong>Nombre:</strong> $nombre</p>
                <p><strong>Correo:</strong> $email</p>
                <p><strong>Mensaje:</strong><br>$mensaje</p>
            ";

            // Enviar correo
            if ($mail->send()) {
                echo "Mensaje enviado correctamente.";
            }
        } catch (Exception $e) {
            echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
} else {
    // echo "Método de solicitud no válido.";
}

<section id="contacto">
    <div class="container">
        <div class="contact-header">
            <h1>Contáctanos</h1>
            <p>¿Tienes alguna pregunta o sugerencia? ¡Escríbenos! Estaremos encantados de ayudarte.</p>
        </div>
        <div class="contact-content">
            <div class="contact-image">
                <img src="../../public/assets/img/contacto.jpg" alt="Imagen de contacto">
            </div>
            <div class="contact-form">
                <form action="contacto" method="POST">
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje:</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>
