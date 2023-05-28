<?php
//Conecto mi form / name / con el server a travez de los name
$nombre = $_POST['nombre'];
$mail = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

//vamos a mostrar un texto plano
$header .= "Content-Type: text/plain";

//Como me va a llegar el cuerpo del mail a mi, o sea lo que la gente escribió en el form - \r\n es para hacer salto de linea
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "E-mail: " . $mail . "\r\n";
$mensaje .= "Asunto: " . $asunto . "\r\n";
$mensaje .= "Mensaje: " . $mensaje . "\r\n";
$mensaje .= "Enviado el " . date('d/m/y', time());

$para = 'fernandofranciscomatias@gmail.com';// El correo a donde van a llegar los mensajes
$asunto = 'Mensaje del sitio lopezfernandomatias.github.io';//El asunto de los correos que me llegan

//La función mail envia un correo electrónico, y el orden es:
//A quien se lo envia? - El título del correo - El mensaje - Header para añadir
mail($para, $asunto, utf8_decode($mensaje), $header);

//Redirección al haber enviado el form
header('<Location:>exito.html');