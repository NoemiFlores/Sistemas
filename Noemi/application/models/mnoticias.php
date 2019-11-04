<?php

class Mnoticias extends CI_Model
{
    function __contstruct()
    {
        parent::__construct();
    }

    public function guardar($titulo,$texto,$autor,$fecha)
    {
        return $this->db->query("INSERT into noticia(titulo, texto, autor, fecha) values('{$titulo}','{$texto}','{$autor}','{$fecha}')");
    }
}