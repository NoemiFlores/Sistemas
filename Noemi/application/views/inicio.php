<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/css/Inicio.css">
  </head>
  <body>
  <header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Sobre nosotros</a></li>
				<li><a href="#">Contacto</a></li>
                <li><a href="#">Login</a>
                <ul class="submenu">
            <li><a href="<?php echo base_url()?>Formulario/login">Entrar</a></li>
						<li><a href="<?php echo base_url()?>Formulario">Registrarse</a></li>
					</ul></li>
			</ul>
		</nav>
	</header>
  <h1>Ultimas noticias</h1>
  <table border=1 align=center>
  <tr>
  <th>Id</th>
  <th>Titulo</th>
  <tr>

  <?php
        foreach($consulta->result() as $fila)
        {?>
        <tr>
            <th><?=$fila->Id?></th>
            <th><?=$fila->Titulo?></th>
        </tr>
        <?php
        }
        ?>
  </table>
        <script src="<?php echo base_url()?>Assets/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo base_url()?>Assets/js/popper.min.js"></script>
        <script src="<?php echo base_url()?>Assets/js/bootstrap.js"></script>
  </body>
</html>