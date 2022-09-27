<!doctype html PUBLIC "‐//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1‐transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http‐equiv="Content‐Type" content="text/html; charset=utf‐8" />
        <title>Buscador</title>
    </head>
    <body>
        <?php
        $link = mysqli_connect("localhost", "root", "password") or die ("Problemas de conexión a la base de datos");

        mysqli_select_db($link, "prueba");

        $pal=$_POST['palabra'];

        if($pal){
            $query = "select * from buscador where canciones LIKE '%".$pal."%'";
            $resp = mysqli_query($link, $query);
            if(mysqli_num_rows($resp) == 0) {
                echo "No hay resultados respecto a la palabra que busca.";
            } else {
                echo "<center><strong>RESULTADOS DE BUSQUEDA</strong></center><br>";
                while($cat = mysqli_fetch_array($resp)) { ?>
                    <tr><td><?php echo ($cat['canciones']); ?></td></tr>    
                <?php }    
            }
        }else{
            echo "<form name='formBuscador' method='post' action=''><input name='palabra' type='text'
            id='Palabra'><input type='submit' name='Submit' value='Buscar!'></form>";
        }?>
    </body>
</html>