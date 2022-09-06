<html>
    <head>
        <title> Listados completo con PAGINACIÓN </title>
    </head>

    <body>
        <?php
            include("conexion.php");
            $Cant_por_Pag = 1;
            $pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null;

            if (!$pagina) {
                $inicio = 0;
                $pagina = 1;
            }
            else {
                $inicio = ($pagina - 1) * $Cant_por_Pag;
            }

            $query = "SELECT * FROM ciudades";
            $resultado = mysqli_query($link, $query);
            $total_registros=mysqli_num_rows($resultado);
            $total_paginas = ceil($total_registros/ $Cant_por_Pag);

            echo "Numero de registros encontrados: " . $total_registros . "<br>";
            echo "Se muestran paginas de " . $Cant_por_Pag . " registros cada una<br>";
            echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";

            $query = "SELECT * FROM ciudades"." limit " . $inicio . "," . $Cant_por_Pag;

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

        <?php
        if ($total_paginas > 1){
            for ($i=1; $i<=$total_paginas; $i++){
                if ($pagina == $i)
                //si muestro el índice de la página actual, no coloco enlace
                echo $pagina . " ";
                else
                //si la página no es la actual, coloco el enlace para ir a esa página
                echo "<a href='consulta_pag.php?pagina=" . $i ."'>" . $i . "</a> ";
            }
        }?>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><a href="menu.html">Volver al meu del ABM</a></p>
    </body>
</html>