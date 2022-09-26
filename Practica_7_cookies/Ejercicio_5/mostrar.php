<?php
    session_start(); //reanuda la sesion existente
    echo $_SESSION['usuario'];
    echo '<br>';
    echo $_SESSION['clave'];
    echo '<br>';
?>