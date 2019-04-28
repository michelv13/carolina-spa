<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mesaje = $_POST['mensaje'];
$header = 'From: ' . $email . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
$header .= 'Mine-Version: 1.0 \r\n';
$header .= 'Content-Type: text/plain';
$mensajecorreo = "This message was sent by: " . $nombre . "\r\n";
$mensajecorreo .= "Email: " . $email . "\r\n";
$mensajecorreo .= "Mensaje: " . $mesaje . "\r\n";
$para = "";
$asunto = "Contacto de sitio web";
$respuesta = mail($para, $asunto, utf8_encode($mensajecorreo), $header );

echo json_encode(array(
    'mensaje' => sprintf('El mensaje ha sido enviado'),
    'datos' => array(
        'nombre' => $nombre,
        'email' => $email,
        'mensaje' => $mensaje
    ),
    'respuesta' => $respuesta
));