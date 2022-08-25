<?php
    $destinatario = $_POST['email'];
    $asunto = 'Un amigo te ha recomendado www.aa.com!';
    $cuerpo = $_POST['cuerpo'] . '\n Ingresa a www.aa.com';
    mail($destinatario, $asunto, $cuerpo);
    echo "El mail ha sido enviado.";
?>