<html>
    <?php
        session_start();
    ?>

    <head>
        <title>Sesiones + BD en PHP</title>
    </head>

    <body>
        <form action="buscar.php" method="post">
            Ingrese su email: <input type="text" name="mail"> 
            <br>
            <input type="submit" value="Continuar">
        </form>
    </body>
</html>