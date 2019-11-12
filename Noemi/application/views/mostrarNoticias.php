<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/libs/dist/sweetalert2.min.js">
    <title>Lista de noticias</title>
</head>
<body>
<h1 align=center>Ultimas noticias</h1>
  <table border=1 align=center>
  <tr>
  <th>ID</th>
  <th>Titulo</th>
  <tr>
  <?php
        foreach($consulta->result() as $fila)
        {?>
        <tr>
            <td>
            <?php echo $fila->idnoticia;?>
              </a>
            </td>
            <td>
            <?php echo $fila->titulo;?>
            </td>
            <td>
            <a href="verNoticia/<?php echo $fila->idnoticia?>">
              <?php echo "Ver Noticia";?>
            </a>
            </td>
            <td>
            <a href="eliminarNoticia/<?php echo $fila->idnoticia?>">
              <?php echo "Eliminar";?>
            </a>
            </td>
        </tr>
        <?php
        }
        ?>
  </table>
  </body>
</html>