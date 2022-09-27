<?php
    session_start();

    $link = mysqli_connect("localhost", "root", "password") or die ("Problemas de conexión a la base de datos");

    mysqli_select_db($link, "base2");
?>

<body>

    <?php
        $mail = $_POST['mail'];

        $query = "SELECT * FROM alumnos WHERE mail ='$mail' ";
    
        $resultado = mysqli_query($link, $query) or die (mysqli_error($link));
    
        $fila = mysqli_fetch_array($resultado);
    
        if(mysqli_num_rows($resultado) != 0) {
            $_SESSION['nombre'] = $fila['nombre'];
        }
        echo ("<a href=mostrar.php>Continuar</a>");
    ?>

</body>


