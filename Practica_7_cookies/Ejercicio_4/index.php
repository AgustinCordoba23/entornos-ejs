<?php
    if(isset($_POST["tipo-titular"])){
        $titular = $_POST["tipo-titular"];
        setcookie("tipo-titular", $titular, time() + (60 * 60 * 24 * 90));
    } else {
        if (isset($_COOKIE["tipo-titular"])){
            $titular = isset($_COOKIE["tipo-titular"]);
        } 
    }
?>

<html>
    <head>
        <title>Noticias</title>
    </head>

    <body>
        <form action="index.php" method="post">
            <?php
            if (isset($_COOKIE["tipo-titular"])){
                echo '<h1> Noticia ' . $titular . '</h1> <br>';
            }          
            ?>

            Ingrese el titular deseado: 
            <br>
            <input type="radio" name="tipo-titular" value="politica"> Noticia política
            <input type="radio" name="tipo-titular" value="economica"> Noticia económica
            <input type="radio" name="tipo-titular" value="deportiva"> Noticia deportiva
            <br>

            <input type="submit" value="Actualizar">
        </form>

        <br>

        <a href="borrar_cookie.php">Borrar cookie</a>
    </body>
</html>