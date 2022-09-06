<head>
    <title>Modificacion</title>
</head>

<body>
    <?php
        include ("conexion.php");

        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];

        $query = "UPDATE ciudades set pais='$pais' where ciudad='$ciudad'";

        mysqli_query($link, $query) or die (mysqli_error($link));

        echo("La ciudad fue modificada<br>");

        echo("<A href= 'menu.html'>Volver al Menu del ABM</A>");

        mysqli_close($link);
    ?>
</body>