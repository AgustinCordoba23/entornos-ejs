<?php

    ob_start("ob_gzhandler");

    session_start();

    $link = mysqli_connect("localhost", "root", "password") or die ("Problemas de conexión a la base dedatos");
    
    mysqli_select_db($link, "compras");

    if(isset($_SESSION['carro'])){
        $carro = $_SESSION['carro']; 
    }else {
        $carro = false;
    }

    $query = "SELECT * FROM catalogo ORDER BY producto ASC";
    $resultado = mysqli_query($link, $query);
    
?>

<html>
    <head>
        <title>CATALOGO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <style type="text/css">
            .catalogo {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 9px;
                color: #333333;
            }
        </style>
    </head>
    
    <body>
        <table width="272" align="center" cellpadding="0" cellspacing="0" style="border: 1px solid #000000;">
            <tr valign="middle" bordercolor="#FFFFFF" bgcolor="#DFDFDF" class="catalogo">
                <td width="170"><strong>Producto</strong></td>
                <td width="77"><strong>Precio</strong></td>
                <td width="25" align="right">
                    <a href="vercarrito.php?<?php echo SID ?>">Ver el contenido del carrito</a>
                </td>
            </tr>
            <?php
            while ($fila = mysqli_fetch_assoc($resultado))
            {
            ?>
            <tr>
                <td><?php echo ($fila['producto']); ?></td>
                <td><?php echo ($fila['precio']); ?></td>
                <td align="center"><?php
                if(!$carro || !isset($carro[md5($row['id'])]['identificador']) || $carro[md5($row['id'])]['identificador']!=md5($row['id'])){
                    ?><a href="agregacar.php?<?php echo SID ?>&id=<?php echo $row['id'];
                    ?>">Agregar al carrito</a><?php 
                } else {
                    ?><a href="borracar.php?<?php echo SID ?>&id=<?php echo $row['id'];
                    ?>">Quitar del carrito</a><?php
                } ?></td>
                </tr><?php 
            } ?>
            </table>
    </body>
</html>

<?php
    ob_end_flush();
?>


