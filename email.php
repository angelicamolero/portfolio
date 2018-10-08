<?php
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'angelicamoleror8@gmail.com';
$asunto = 'Mensaje de mi sitio web';

$bool = mail($para, $asunto, utf8_decode($mensaje), $header);

if($bool){
    echo "Mensaje enviado";
}else{
    echo "Mensaje no enviado";
}
?>