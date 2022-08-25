<!doctype html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  </head>
  <body>

    <div class="container" style="margin: 20px; border: 1px solid black; width: fit-content; padding: 20px;">
        <h3>Formulario de contacto</h3>
        <form action="enviar.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingresar nombre">
              </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" placeholder="Ingresar email">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" name="telefono" placeholder="Ingresar telefono">
            </div>
            <div class="form-group">
                <label for="asunto">Asunto</label>
                <input type="text" class="form-control" name="asunto" placeholder="Ingresar asunto">
            </div>
            <div class="form-group">
                <label for="cuerpo">Cuerpo del mensaje</label>
                <textarea class="form-control" name="cuerpo" rows="3" placeholder="Ingresar mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>