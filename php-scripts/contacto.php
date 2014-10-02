<?php

$email = $_POST['email'];
$para = 'f.olmedo.v@gmail.com';
$titulo = 'Un nuevo mensaje en BlueWhaleProject';
$msjCorreo = 'El correo '.$email.' está interesado en el sitio!';

if ($_POST['submit']) {    
    if (mail($para, $titulo, $msjCorreo)) {
        echo   "<script language='javascript'> 
                    alert('The email has been sent. Thank you very much!'); 
                    window.location.href = 'http://192.99.154.165';
                </script>";
    } else {
        echo 'Ups! Something goes wrong. Try it later.';
    }
}

?>
