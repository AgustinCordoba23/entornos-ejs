<head>
    <title>Modificacion</title>
</head>

<boby>
    <?php
    include ("conexion.php");

    $ciudad = $_POST['ciudad'];

    $query = "SELECT * FROM ciudades WHERE ciudad ='$ciudad' ";

    $resultado = mysqli_query($link, $query) or die (mysqli_error($link));

    $fila = mysqli_fetch_array($resultado);

    if(mysqli_num_rows($resultado) == 0) {
        echo ("La ciudad no está registrada en la bd <br>");
        echo ("<A href='form_buscar.html'>Continuar</A>");
    }
    else{
        ?>
        <h1>Form para modifica pais</h1>
            <FORM action="modificar.php" method="POST" name="FormModi">
                <table width="356">
                    <tr>
                        <td width="103"> Ciudad: </td>
                        <td width="243"> <input type="text" name="ciudad" value="<?php
                            echo($fila['ciudad']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="103"> Pais: </td>
                        <td width="243"> <input type="text" name="pais" value="<?php
                            echo($fila['pais']); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"> <input type="SUBMIT" name="Submit"
                        value="Modificar">
                        </td>
                    </tr>
                </table>
            </FORM>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($link);
    ?>
</body>