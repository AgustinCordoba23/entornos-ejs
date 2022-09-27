<?php
    session_start(); //reanuda la sesion existente
    if(isset($_SESSION['nombre'])){
        echo 'Bienvenido '. $_SESSION['nombre'];
    } else {
        echo 'No puede continuar';
    }
?>