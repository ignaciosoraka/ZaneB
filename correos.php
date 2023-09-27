<?php
    $destinatario = 'ignaciosoraka@gmail.com';

    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $header = "Desde: La pagina de ZANE " . $email; // Cambia "Enviado desde la página de ZANE" por el email del remitente
    $mensaje = "Mensaje de contacto de: " . $nombre . "\n";
    $mensaje .= "Asunto: " . $asunto . "\n";
    $mensaje .= "Teléfono: " . $phone;

    if (mail($destinatario, $asunto, $mensaje, $header)) {
        echo "<script>alert('Correo enviado exitosamente');</script>";
        echo "<script>setTimeout(\"location.href='index.html'\", 1000);</script>";
    } else {
        echo "<script>alert('Error al enviar el correo');</script>";
    }
?>
