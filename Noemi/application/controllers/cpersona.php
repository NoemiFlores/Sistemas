<?php

class cpersona extends CI_Controller 
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('mpersona');
    }

    public function index()
    {
        $this->load->view('Formulario');
    }

    public function guardar()
    {
        $param['nombre'] = $this->load->post('inombre');
        $param['edad'] = $this->load->post('iedad');
        $param['email'] = $this->load->post('iemail');
        $param['genero'] = $this->load->post('radio');
        $param['hobbies'] = $this->load->post('hobbie');
        $param['usuario'] =$this->load->post('iusuario');
        $param['contra'] = $this->load->post('icontra');

        $this->mpersona->guardar($param);
    }
}