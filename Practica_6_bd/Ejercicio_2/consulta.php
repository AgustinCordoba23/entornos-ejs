<html>
    <head>
        <title> Listados completo </title>
    </head>

<body>
    <?php
        include("conexion.php");
        $query = "SELECT * FROM ciudades";
        $resultado = mysqli_query($link, $query);
        $total_registros=mysqli_num_rows($resultado);
    ?>
    <table border=1>
        <tr>
            <td><b>Ciudad</b></td>
            <td><b>Pais</b></td>
            <td><b>Habitantes</b></td>
            <td><b>Superficie</b></td>
            <td><b>tieneMetro</b></td>
        </tr>
        <?php
        while ($fila = mysqli_fetch_array($resultado))
        {
        ?>
        <tr>
            <td><?php echo ($fila['ciudad']); ?></td>
            <td><?php echo ($fila['pais']); ?></td>
            <td><?php echo ($fila['habitantes']); ?></td>
            <td><?php echo ($fila['superficie']); ?></td>
            <td><?php echo ($fila['tieneMetro']); ?></td>
        </tr>
        <?php
        }

        mysqli_free_result($resultado);
        mysqli_close($link);
        ?>
    </table>

    <p>&nbsp;</p>

    <p><a href="menu.html">Volver al menu del ABM</a></p>
</body>