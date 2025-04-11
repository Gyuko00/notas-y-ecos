<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['message']);

    // Validación básica
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        $to = "";
        $subject = "Nuevo mensaje de contacto de tu página web";
        $body = "Nombre: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";
        $headers = "From: $email";

        // Enviar el correo
        if (mail($to, $subject, $body, $headers)) {
            echo "Mensaje enviado correctamente.";
        } else {
            echo "Error al enviar el mensaje. Intenta nuevamente.";
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
} else {
    echo "Método de solicitud no válido.";
}

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
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

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
    echo "Método de solicitud no válido.";
}
