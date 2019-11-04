<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>🤣🤣 Noticias 🤣🤣</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/css/noticias.css">
	
</head>
<body>
	<nav class="registro">
			<h1>Registra tu noticia</h1>
	</nav>
	<div class="container"> <!-- contenedor principal-->
	<form action="Formulario/getNoticias" method="post">

	<div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon --> 
		<div class="col-25" style="/*border: 5px solid blue*/">
			<label for="ltitulo" class="color_labels">Titulo:</label>
		</div>

		<div class="col-75" style="/*border: 5px solid cyan">
			<input type="text" name="ititulo" id="ititulo" maxLenght="50" placeholder="Titulo de la noticia" required>
		</div>
	</div>

	<div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon --> 
		<div class="col-25" style="/*border: 5px solid blue*/">
			<label for="texto" class="color_labels">Notica:</label>
		</div>

		<div class="col-75" style="/*border: 5px solid cyan">
			<input type="text" name="itexto" id="itexto" maxLenght="50" placeholder="Escriba su noticia" required>
		</div>
	</div>

	<div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon --> 
		<div class="col-25" style="/*border: 5px solid blue*/">
			<label for="texto" class="color_labels">Autor:</label>
		</div>

		<div class="col-75" style="/*border: 5px solid cyan">
			<input type="text" name="iautor" id="iautor" maxLenght="50" placeholder="Autor de la noticia" required>
		</div>
	</div>

    <div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon --> 
		<div class="col-25" style="/*border: 5px solid blue*/">
			<label for="texto" class="color_labels">Fecha de la noticia:</label>
		</div>

		<div class="col-75" style="/*border: 5px solid cyan">
			<input type="date" name="ifecha" id="ifecha" placeholder="Fecha de la noticia" required>
		</div>
	</div>

	<div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon -->
		<div class="col-25" style="/*border: 5px solid cyan">
			<label for="corel" class="color_labels"></label>
		</div>
			<div class=col-75>
			<label for="lguardar" class="color_labels">
			<input type="submit" name="guardar" id="boton" value="Guardar"></label>
		</div>
	</div>

	<div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon -->
		<div class="col-25" style="/*border: 5px solid cyan">
			<label for="corel" class="color_labels"></label>
		</div>
			<div class=col-75>
			<a href="#cancelar" role="button" class="btn btn-large btn-primary" data-toggle="modal">Cancelar</a>
			<div id="cancelar" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Atencion</h4>
						</div>
						<div class="modal-body">
							<p>Estas seguro de realizar esta accion?</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
							<button type="button" class="btn btn-danger" onclick="document.location.reload();">Si</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	</form>
	</div> <!-- end container-->

	<script src="<?php echo base_url()?>Assets/js/jquery-3.4.1.min.js"></script>
	<script src="<?php echo base_url()?>Assets/js/popper.min.js"></script>
	<script src="<?php echo base_url()?>Assets/js/bootstrap.js"></script>
</body>
</html>