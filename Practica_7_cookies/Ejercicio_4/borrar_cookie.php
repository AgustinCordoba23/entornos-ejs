<?php
    unset($_COOKIE['tipo-titular']); //borra
    setcookie('tipo-titular', '', time() - 3600); //expira

    echo 'Cookie borrada con exito!';
    echo '<br><a href="index.php">Volver</a>'
?>