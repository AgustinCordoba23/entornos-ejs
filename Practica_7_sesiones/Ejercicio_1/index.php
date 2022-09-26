<?php
    if(isset($_POST["estilo"])){
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90)); //90 días de expiración
    }else{
    if (isset($_COOKIE["estilo"])){
        $estilo = $_COOKIE["estilo"];
    }
    }
?>

<html>
    <head>
        <title>Cookies en PHP</title>
        <?php
            if (isset($estilo)){
                echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';
            }
        ?>
    </head>

    <body>
        <form action="index.php" method="post">
            <select name="estilo">
                <option value="verde">Verde
                <option value="rosa">Rosa
                <option value="negro">Negro
            </select>
            <input type="submit" value="Actualizar">
        </form>
    </body>
</html>