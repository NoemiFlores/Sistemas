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
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="<?php echo base_url();?>Assets/img/avatar.jpg"/>
                </div>
                <form class="col-12">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario"/>
                    </div>
                    <div class="form-group" id="contraseña-group">
                        <input type="password" class="form-control" placeholder="Contraseña"/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar</button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar Contraseña</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>