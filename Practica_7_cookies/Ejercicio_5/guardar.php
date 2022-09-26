<?php 
    session_start(); //reanuda la sesion existente
    $_SESSION['usuario'] = $_POST["usuario"];
    $_SESSION['clave'] = $_POST["clave"];
    echo '<a href=mostrar.php>Continuar</a>';
?>