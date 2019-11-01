<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
    <!--JQUERY-->
    <script src="<?php echo base_url()?>Assets/js/jquery-3.4.1.min.js"></script>
    <!--FRAMEWORK BOOTSTRAP PARA EL ESTILO DE LA PÁGINA-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/js/bootstrap.min.js">
    <!--ICONOS-->
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>Assets/css/login.css">
</head>
<body>
    <div class="container">
    <form method="post" action="<?php echo base_url();?>Formulario/login_validation"> 
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="<?php echo base_url();?>Assets/img/avatar.jpg"/>
                </div>
                <form class="col-12" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nombre de usuario">
                        <span class="text-danger"><?php echo form_error('usuario');?></span>
                    </div>
                    <div class="form-group" id="contraseña-group">
                        <input type="password" name="contra" id="contra" class="form-control" placeholder="Contraseña">
                        <span class="text-danger"><?php echo form_error('contra');?></span>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
                    <?php
                        echo $this->session->flashdata("error");
                    ?>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar Contraseña</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>