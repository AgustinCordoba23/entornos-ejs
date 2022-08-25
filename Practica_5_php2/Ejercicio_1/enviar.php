<?php
    $destinatario = $_POST['destinatario'];
    $asunto = $_POST['asunto'];
    $cuerpo = $_POST['cuerpo'];
    mail($destinatario, $asunto, $cuerpo);
    echo "El mail ha sido enviado.";
?>