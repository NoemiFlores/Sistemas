<!DOCTYPE html>
<html>
<head>
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
            <td><?php echo $fila->idnoticia?></td>
            <td><?php echo $fila->titulo?></td>
            <td><a href="verNoticia?datos=<?php echo 
            "Noticia: ".$fila->idnoticia."<br>".
            "Titulo: ".$fila->titulo."<br>".
            "Texto: ".$fila->texto."<br>".
            "Autor: ".$fila->autor."<br>".
            "Fecha: ".$fila->fecha?>">Ver noticia</td>
            <td><a href="modificarNoticia">Modificar</td>
            <td><a href="eliminarNoticia">Eliminar</td>
        </tr>
        <?php
        }
        ?>
  </table>
  </body>
</html>