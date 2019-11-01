<?php
include_once 'includes/mlogin';
include_once 'includes/Formulario';

$userSession = new UserSession();
$usuario = new Usuario();

if(isset($_SESSION['user']))
{
  echo 'Hay sesion';
}
else if(isset($_POST['usuario']) && isset($_POST['contra']))
{
  echo "Validacion de login";
}
else
{
  echo "login";
}
?>