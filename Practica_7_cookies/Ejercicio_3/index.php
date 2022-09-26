<?php
    if(isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];
        setcookie("nombre", $nombre, time() + (60 * 60 * 24 * 90));
    } else {
        if (isset($_COOKIE["nombre"])){
            $nombre = isset($_COOKIE["nombre"]);
        } 
    }
?>

<html>
    <head>
        <title>Cookies nombre PHP</title>
    </head>

    <body>
        <form action="index.php" method="post">
            <?php
            if (isset($_COOKIE["nombre"])){
                echo 'Nombre ingresado: ' . $nombre . '<br>';
            }          
            ?>
            Ingrese su nombre: <input type="text" name="nombre"> 
            <br>
            <input type="submit" value="Actualizar">
        </form>
    </body>
</html>