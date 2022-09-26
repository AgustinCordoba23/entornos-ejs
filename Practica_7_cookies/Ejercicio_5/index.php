<html>
    <?php
        session_start(); //inicia la sesion
    ?>

    <head>
        <title>Sesiones en PHP</title>
    </head>

    <body>
        <form action="guardar.php" method="post">
            Ingrese su usuario: <input type="text" name="usuario"> 
            <br>
            Ingrese su clave: <input type="text" name="clave"> 
            <br>
            <input type="submit" value="Continuar">
        </form>
    </body>
</html>