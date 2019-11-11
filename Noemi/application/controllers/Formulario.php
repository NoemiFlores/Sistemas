<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();//herencia
        $this->load->model('mdatos');//Manda llamar 'mdatos'
        // $this->load->library('session');
        // session_start();//manejar sesiones
    }

    //Formulario.php
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

    //inicio.php
    public function inicio()
    {
        $this->load->view('inicio');
    }

    //login.php
    public function login()
    {
        //$data['title']='Inicia sesion';
        $this->load->view('login');
    }

    function login_validation()
    {
        //$this->load->library('form_validation');
        $this->form_validation->set_rules('usuario','Usuario','required');
        $this->form_validation->set_rules('contra','Contra','required');
        if($this->form_validation->run())
        {
            //true
            $usuario=$this->input->post('usuario');
            $contra=$this->input->post('contra');
            //model function
            $this->load->model('mlogin');
            if($this->mlogin->can_login($usuario,$contra))
            {
                $session_data=array(
                    'usuario' => $usuario
                );
                $this->session->set_userdata($session_data);
                redirect(base_url().'Formulario/enter');
            }
            else
            {
                $this->session->set_flashdata('error','Usuario o contrasena incorrecta');
                redirect(base_url().'Formulario/login');
            }
        }
        else
        {
            //false
            $this->login();
        }
    }

    function enter()
    {
        if($this->session->userdata('usuario')!= '')
        {
            echo '<h1>Bienvenid@ - '.$this->session->userdata('usuario').'</h1>';
            echo '<h4><a href="'.base_url().'Formulario/noticias">Registrar noticia</a></h4>';
            echo '<label><a href="'.base_url().'Formulario/logout">Logout</a></label>';
        }
        else
        {
            redirect(base_url().'Formulario/login');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('usuario');
        redirect(base_url().'Formulario/inicio');
    }

    //Registro de noticias
    public function noticias()
    {
        $this->load->view('noticias');
    }

    //mostrar tabla noticias
    public function mostrarNoticias()
    {
        $result = $this->db->get('noticia');
        $data=array('consulta'=>$result);
        $this->load->view('mostrarNoticias',$data);
    }

    //ver noticias
    public function verNoticia()
    {
        $this->load->view('verNoticia');
    }

    //modificar noticia
    public function modificarNoticia($idnoticia=null)
    {
        if (!$idnoticia==null)
        {
            $this->layout->view('modificarNoticia');
        }
        else
        {
            redirect(base_url().'Formulario/mostrarNoticias');
        }
    }

    //eliminar noticia
    public function eliminarNoticia()
    {
        $this->load->view('eliminarNoticia');
    }
}
?>