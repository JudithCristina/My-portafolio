<?php
$nombre =$_POST['name'];
$email =$_POST['email'];
$asunto =$_POST['subject'];
$mensaje =$_POST['message'];

$destinatario = "judithcristinaqi@gmail.com";
$asunto1="Contacto desde nuestro portafolio"

$carta = "De: $nombre \n ";
$carta .= "Correo: $email \n";
$carta .= "Asunto: $asunto \n ";
$carta .= "Mensaje: $mensaje"

mail($destinatario, $asunto1, $carta)
?>