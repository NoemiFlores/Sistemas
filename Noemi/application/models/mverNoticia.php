<?php

class MverNoticia extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getTabla()
    {
        return $this->db->get('noticia');
    }

    public function getNoticias($idnoticia)
    {
        return $this->db->query("SELECT*FROM noticia where idnoticia={$idnoticia}");
    }

    public function eliminarNoticia($idnoticia)
    {
        return $this->db->query("DELETE FROM noticia where idnoticia={$idnoticia}");
    }
}