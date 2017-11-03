<?php
  if (isset($_POST['nombre'])) {
      $nombre = $_POST['nombre'];
  }
  if (isset($_POST['numero'])) {
      $numero = $_POST['numero'];
  }

try
  {
    require_once("funciones/bd_conexion.php");
  }
  catch(Exception $e)
    {
      $error = $e->getMessage();
    }

?>



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

  </body>
</html>