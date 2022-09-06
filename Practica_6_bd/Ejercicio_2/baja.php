<html>
    <head>
        <title>Baja</title>
    </head>

    <body>
        <?php
        include ("conexion.php");

        $ciudad = $_POST ['ciudad'];

        $query = "SELECT * FROM ciudades WHERE ciudad = '$ciudad'";

        $resultado = mysqli_query($link, $query);

        if(mysqli_num_rows($resultado) == 0)
        {
            echo ("La ciudad no existe en la bd <br>");
            echo ("<A href='form_baja.html'>Continuar</A>");
        }
        else{
            $query= "DELETE FROM ciudades WHERE ciudad = '$ciudad'";
            mysqli_query($link, $query);
            echo("La ciudad fue eliminada<br>");
            echo("<A href='menu.html'>Volver al Menu del ABM</A>");
        }

        mysqli_free_result($resultado);
        mysqli_close($link);
        ?>
    </body>
</html>