<?php
    $destinatario = 'admin@admin.test';
    $asunto = 'Consulta de: ' . $_POST['email'];
    $cuerpo = '\n Nombre: ' . $_POST['nombre'] . '
        \n Telefono: ' . $_POST['telefono'] . '
        \n Asunto: ' . $_POST['asunto'] . '
        \n Cuerpo: ' . $_POST['cuerpo'];
    mail($destinatario, $asunto, $cuerpo);
    echo "El mail ha sido enviado.";
?>