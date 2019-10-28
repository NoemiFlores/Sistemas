<?php

class Mdatos extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getTabla()
    {
        return $this->db->get('persona');
    }

    public function getDatos()
    {
        $this->db->query("SELECT * FROM persona");
        return $result->row();//convierte en una fila
    }

    public function mostrarDatos()
    {
        $result=$this->db->get('persona');
        return $data=array('consulta'=>$result);
        //$this->load->view('mostrarDatos',$data);
    } 
}