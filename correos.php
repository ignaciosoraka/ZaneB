<?php
$destinatario = 'ignaciosoraka@gmail.com';

$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad']; // Cambio el nombre del campo
$phone = $_POST['phone'];
$email = $_POST['email'];

$mensaje = "Mensaje de contacto:\n\n";
$mensaje .= "Nombre: " . $nombre . "\n";
$mensaje .= "Ciudad: " . $ciudad . "\n"; // Utiliza el valor de la ciudad como asunto
$mensaje .= "Correo Electrónico: " . $email . "\n";
$mensaje .= "Teléfono: " . $phone;

$asuntoCorreo = "Consulta de " . $nombre; // Puedes mantener el asunto como "Consulta de [nombre]"

$header = "From: ZANE <" . $email . ">\r\n";
$header .= "Reply-To: " . $email . "\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($destinatario, $asuntoCorreo, $mensaje, $header)) {
    echo "<script>alert('Correo enviado exitosamente');</script>";
    echo "<script>setTimeout(\"location.href='index.html'\", 1000);</script>";
} else {
    echo "<script>alert('Error al enviar el correo');</script>";
}
?>
