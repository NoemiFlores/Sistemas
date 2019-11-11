<?php

class Mnoticia extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getTabla()
    {
        return $this->db->get('noticia');
    }

    public function getNoticias()
    {
        $this->db->query("SELECT*FROM noticia");
        return $result->row();
    }

    //public function mostrarNoticia()
    //{
      //  $result=$this->db->get('noticia');
        //return $data=array('consulta'=>$result);
    //}
}