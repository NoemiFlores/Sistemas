<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();//herencia
        $this->load->model('mdatos');//Manda llamar 'mdatos'
    }

    public function index()
	{
        $this->load->view('Formulario');
    }
    
    public function getDatos()
    {
        $nombre = $_POST['inombre'];
        $edad = $_POST['iedad'];
        $email = $_POST['iemail'];
        $sexo = $_POST['radio'];
        $usuario = $_POST['iusuario'];
        $contra = $_POST['icontra'];
        // echo "Nombre: ".$nombre."<br>"."Edad: ".$edad."<br>".
		// "E-mail: ".$email."<br>"."Sexo: ".$sexo."<br>";

        $h='';
        if(isset($_POST['guardar']))
        {
            if(isset($_POST['hobbie']))
            {
                $hobbie = $_POST['hobbie'];
                var_dump($hobbie);
                echo "Hobbies: ";
                $H = implode(', ', $_POST['hobbie']);
                echo $H;
            }
            else
            {
                $hobbie = " ";
                echo "Hobbies: ".$hobbie;
            }
        }
        $this->load->model('mpersona');
        $this->mpersona->guardar($nombre,$edad,$email,$sexo,$H,$usuario,$contra);
        redirect('Formulario');
    }
    
    //mostrarDatos.php
    public function mostrarDatos()
    {
        $this->mdatos->mostrarDatos();
        $data=$this->mdatos->mostrarDatos();
        $this->load->view('mostrarDatos',$data);
    }

    public function inicio()
    {
        $this->load->view('inicio');
    }

    public function perfil()
    {
        $this->load->view('perfil');
    }

    public function login()
    {  
       if(isset($_POST['contra']))
       {
           $this->load->model('mlogin');
           if($this->mlogin->login($_POST['usuario'],$_POST['contra']))
           {
               $this->session->set_userdata('usuario',$_POST['usuario']);
               redirect('Formulario/perfil');
           }
           else
           {
               redirect('Formulario/login#bad-contra');
           }
       }
       $this->load->view('login'); 
    }
}
?>