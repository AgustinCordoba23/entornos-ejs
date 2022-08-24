<?php
    function comprobar_nombre_usuario($nombre_usuario){
        //compruebo que el tamaño del string sea válido.
        if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
            return false;
        }

        //compruebo que los caracteres sean los permitidos
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
        for ($i=0; $i<strlen($nombre_usuario); $i++){
            if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
                return false;
            }
        }

        return true;
    }

    /*
    comprobar_nombre_usuario('aa'); //false
    comprobar_nombre_usuario('aaaaaaaaaaaaaaaaaaaaaaaaaa'); //false
    comprobar_nombre_usuario('agustin****'); //false
    comprobar_nombre_usuario('agustin'); //true
    comprobar_nombre_usuario('agustin145'); //true
    */
?>

<html>

    <head>
        <title>Último Ejercicio</title>
    </head>

    <body>
        <?php
        if (!isset($_POST['usuario'])) {
            ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                Usuario: <input name="usuario">
                <input type="submit" name="submit" value="Comprobar">
            </form>
            <?php
        }else {
            if(comprobar_nombre_usuario($_POST['usuario'])){
                echo $nombre_usuario . " es válido <br>";
            } else {
                echo $nombre_usuario . " no es válido <br>";
            }
        }
        ?>
    </body>
</html>