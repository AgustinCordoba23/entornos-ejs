<?php
    if (isset($_COOKIE["contador"])){
        $contador_actual = $_COOKIE["contador"];
        $contador_actual = $contador_actual + 1;
        setcookie("contador", $contador_actual, time() + (60 * 60 * 24 * 90));
    } else {
        setcookie("contador", 0, time() + (60 * 60 * 24 * 90));
        $contador_actual = $_COOKIE["contador"];
    }
?>

<html>
    <head>
        <title>Contador en PHP</title>
    </head>

    <body>
        <?php
            if($contador_actual == 0){
                echo '<h1> BIENVENIDO </h1>';
            } else {
                echo 'Contador: ' . $contador_actual;
            }
        ?>
    </body>
</html>