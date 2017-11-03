
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Agenda PHP</title>
    <link rel="stylesheet" href="css/estilos.css" media="screen">
  </head>
  <body>
    <div class="contenedor">
      <h1>Agenda de Contactos</h1>

      <div class="contenido">
        <h2>Nuevo Contacto</h2>
        <form action="crear.php" method="post">
          <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
          </div>
          <div class="campo">
            <label for="numero">Numero</label>
            <input type="text" name="numero" id="numero" placeholder="Numero Telefonico">
          </div>
          <input type="submit" value="Agregar">
        </form>
      </div>

  </body>
</html>