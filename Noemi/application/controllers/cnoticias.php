<?php

class cnoticias extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('mnoticias');
    }

    public function noticia()
    {
        $this->load->view('noticias');
    }

    public function guardar()
    {
        $param['titulo']=$this->input->post('ititulo');
        $param['texto']=$this->input->post('itexto');
        $param['autor']=$this->input->post('iautor');
        $param['fecha']=$this->input->post('ifecha');

        $this->mnoticias->guardar($param);
        redirect('Formulario/noticias');
    }
}