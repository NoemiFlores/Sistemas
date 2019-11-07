<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mtablaNoticia');
    }

    public function noticias()
    {
        $this->load->view('inicio');
    }
    
    public function getNoticias()
    {
        $titulo=$post['ititulo'];
        $texto=$post['itexto'];
        $autor=$post['iautor'];
        $fecha=$post['ifecha'];

        $this->load->model('mnoticias');
        $this->mnoticias->guardar($titulo,$texto,$autor,$fecha);
        redirect('inicio');
    }

    public function mostrarNoticias()
    {
        $this->mtablaNoticia->mostrarNoticia();
        $data=$this->mtablaNoticia->mostrarNoticia();
        $this->load->view('inicio',$data);
    }
}