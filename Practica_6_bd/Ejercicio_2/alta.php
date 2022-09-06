<html>
    <head>
        <title>Alta Usuario</title>
    </head>
    <body>
        <?php
        include("conexion.php");

        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $habitantes = $_POST['habitantes'];
        $superficie = $_POST['superficie'];
        $tieneMetro = $_POST['tieneMetro'];

        //Se deja comentada la opcion para checkear si ya existe ya que la columna id se configura AI
        /*
        $query = "SELECT Count(ciudad) as cant FROM ciudades WHERE ciudad='$ciudad'";
        $resultado = mysqli_query($link, $query) or die (mysqli_error($link));
        $cantidad = mysqli_fetch_assoc($resultado);

        if ($cantidad ['cant']!=0){
        echo ("La ciudad ya existe<br>");
        echo ("<A href='menu.html'>VOLVER AL ABM</A>");
        }
        else {
        */

        $query = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
        values ('$ciudad','$pais', '$habitantes', '$superficie', '$tieneMetro')";
        mysqli_query($link, $query) or die (mysqli_error($link));

        echo("La ciudad fue registrada<br>");

        echo ("<A href='menu.html'>VOLVER AL MENU</A>");
        
        //mysqli_free_result($vResultado);
        
        mysqli_close($link);
        ?>
    </body>
</html>
