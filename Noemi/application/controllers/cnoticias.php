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
        $param['titulo'] = $this->load->post('ititulo');
        $param['texto'] = $this->load->post('itexto');
        $param['autor'] = $this->load->post('iautor');
        $param['fecha'] = $this->load->post('ifecha');

        $this->mnoticias->guardar($param);
    }
}