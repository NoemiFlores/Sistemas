<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>🤣🤣 Formulario 🤣🤣</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/css/formulario.css">
	
</head>
<body>
	<nav class="registro">
			<h1>Registro</h1>
	</nav>
	<div class="container"> <!-- contenedor principal-->
	<form action="Formulario/getDatos" method="post">

	<div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon --> 
		<div class="col-25" style="/*border: 5px solid blue*/">
			<label for="lnombre" class="color_labels">Nombre:</label>
		</div>

		<div class="col-75" style="/*border: 5px solid cyan">
			<input type="text" name="inombre" id="inombre" maxLenght="50" placeholder="Escriba su nombre" required>
		</div>
	</div>

	<div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon --> 
		<div class="col-25" style="/*border: 5px solid blue*/">
			<label for="ledad" class="color_labels">Edad:</label>
		</div>

		<div class="col-75" style="/*border: 5px solid cyan">
			<input type="text" name="iedad" id="iedad" maxLenght="50" placeholder="Escriba su edad" required>
		</div>
	</div>

	<div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon --> 
		<div class="col-25" style="/*border: 5px solid blue*/">
			<label for="lemail" class="color_labels">Email:</label>
		</div>

		<div class="col-75" style="/*border: 5px solid cyan">
			<input type="email" name="iemail" id="iemail" maxLenght="50" placeholder="Escriba su correo" title="Favor de escribir correctamente su correo en el formato algo@dominio.com|net|mx|otro" required>
		</div>
	</div>

	<div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon --> 
		<div class="col-25" style="/*border: 5px solid blue*/">
			<label for="lprod" class="color_labels">Genero:</label>
		</div>

		<div class="col-75" style="/*border: 5px solid cyan">
			<input type="radio" name="radio" id="radio" value="Femenino" required>
			<label for="Femenino" class="color_labels"> F 👩</label>

			<input type="radio" name="radio" id="radio" value="Masculino">
			<label for="Masculino" class="color_labels"> M 👨</label>
		</div>
	</div>

	<div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon --> 
		<div class="col-25" style="/*border: 5px solid cyan">
			<label for="corel" class="color_labels">Hobbies</label>
		</div>
		<div class=col-75>
			<input type="checkbox" name="hobbie[]" id="ihobbie" value="Actuacion">
			<label for="hobbie" class="color_labels"> Actuación</label>

			<input type="checkbox" name="hobbie[]" id="ihobbie" value="Ajedrez">
			<label for="hobbie" class="color_labels"> Ajedrez</label>

			<input type="checkbox" name="hobbie[]" id="ihobbie" value="Canto">
			<label for="hobbie" class="color_labels"> Canto</label>

			<input type="checkbox" name="hobbie[]" id="ihobbie" value="Danza">
			<label for="hobbie" class="color_labels"> Danza</label>
		</div>

	</div>

	<div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon --> 
		<div class="col-25" style="/*border: 5px solid blue*/">
			<label for="lusuario" class="color_labels">Usuario:</label>
		</div>

		<div class="col-75" style="/*border: 5px solid cyan">
			<input type="text" name="iusuario" id="iusuario" maxLenght="50" placeholder="Escriba un nombre de usuario" required>
		</div>
	</div>

	<div class="row" style="/*border: 5px solid red"> <!--con el row secciona el elemento, indicando que es un renglon --> 
		<div class="col-25" style="/*border: 5px solid blue*/">
			<label for="lcontra" class="color_labels">Contrasena:</label>
		</div>

		<div class="col-75" style="/*border: 5px solid cyan">
			<input type="password" name="icontra" id="icontra" maxLenght="50" placeholder="Escriba una contrasena" required>
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