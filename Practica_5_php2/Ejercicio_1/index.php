<html>

    <head>
        <title>Ejercicio 1</title>
    </head>

    <body>
        <form action="enviar.php" method="post">
            <fieldset>
            <p><label> Destinatario <input type="text" name="destinatario"
            size="25" /> </label></p>
            <p><label> Asunto <input type="text" name="asunto"
            size="25" /> </label></p>
            Cuerpo
            <p><label><textarea name="cuerpo" cols="32"rows="6"></textarea></label></p>
            <input type="submit" value="Enviar"/>
            </fieldset>
        </form>
    </body>

</html>