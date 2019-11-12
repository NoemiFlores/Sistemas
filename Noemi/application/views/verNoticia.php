<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/libs/dist/sweetalert2.min.js">
    <title>Noticia completa</title>
</head>
<body>
<h1 align=center>Noticia completa</h1>
  <table border=1 align=center>
  <tr>
  <th>ID</th>
  <th>Titulo</th>
  <th>Texto</th>
  <th>Autor</th>
  <th>Fecha</th>
  </tr>
  <?php
        foreach($var->result() as $fila)
        {?>
        <tr>
            <td>
            <?php echo $fila->idnoticia;?>
            </td>

            <td>
            <?php echo $fila->titulo;?>
            </td>

            <td>
            <?php echo $fila->texto;?>
            </td>

            <td>
            <?php echo $fila->autor;?>
            </td>

            <td>
            <?php echo $fila->fecha;?>
            </td>

        </tr>
        <?php
        }
        ?>
  </table>
  </body>
</html>