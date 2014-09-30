<?php

$email = $_POST['email'];
$para = 'f.olmedo.v@gmail.com';
$header = 'Has recibido un correo de '.$email;
$titulo = 'ASUNTO DEL MENSAJE';
$msjCorreo = 'El correo '.$email.' está interesado en el sitio!';

if ($_POST['submit']) {
    echo $msjCorreo;
    if (mail($para, $titulo, $msjCorreo, $header)) {
        echo   "<script language='javascript'> 
                    alert('Mensaje enviado, muchas gracias.'); 
                    window.location.href = 'http://208.69.31.31';
                </script>";
    } else {
        echo 'Falló el envio';
    }
}

?>