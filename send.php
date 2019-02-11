<?php

$para = "xxxxx@hotmail.com";
$nombre = $_POST["nombre"];
$asunto = "Solicitud de información por: ".$_POST["name"];

$cuerpo .= "<h2>Reciba un Cordial Saludo,</h2><br>El siguiente usuario ha solicitado información a través de su sitio web:"."<br><br>";
$cuerpo .= "<strong>Nombre:</strong> ".$_POST["name"]."<br>";
$cuerpo .= "<strong>E-mail:</strong> ".$_POST["phone"]."<br>";
$cuerpo .= "<strong>Teléfono:</strong> ".$_POST["mail"]."<br>";
$cuerpo .= "<strong>Asunto:</strong> ".$_POST["subject"]."<br>";

$dir_result = "http://www.xxxxxxxxxxxx.com";


$de = "Nombre en la bandeja de entrada<sitioweb@XXXXXXXXX.com>";

$headers = "MIME-Version:1.0;\r\n";
$headers .= "Content-type: text/html; \r\n charset=UTF-8; \r\n";
$headers .= "From: $de; \r\n";
$headers .= "To: $para; \r\n";
$headers .= "Bcc: copia-oculta@gmail.com \r\n";


if( mail($para,$asunto,$cuerpo,$headers))
    //echo "Enviado Correctamente";

//else
    //echo "Fallo en envio";	
	

header ("Location: $dir_result"); 

?>
