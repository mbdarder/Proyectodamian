<?php
$name = $_POST ['name']
$email = $_POST ['email']
$number = $_POST ['number']
$text = $_POST ['text']

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$text = "Este mensaje fue enviado por: " . $name . " \r\n"
$text .= "Su e-mail es: " . $email . " \r\n"
$text .= "Teléfono de contacto: " . $phone . " \r\n"
$text .= "Mensaje: " . $_POST ['text'] . " \r\n"
$text .= "Enviado el: " . date('d/m/Y', time ())

$para = 'mbdarder@gmail.com';
$asunto = 'Consulta sobre Av Constituyentes 5151';

mail($para, $asunto, utf8_decode($text), $header);

header("Location:index.html");
?>