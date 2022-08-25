<?php
    session_start();
?>

<html>
    <body>  
        <?php
            echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
        ?>
        <br>
        <br>
        <a href="index.php">Volver</a>
    </body>
</html>