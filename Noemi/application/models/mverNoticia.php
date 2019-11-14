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

    public function obtenerNoticia(int $idnoticia)//funcion para editar la noticia
    {
        return $this->db->query("SELECT idnoticia,titulo,texto,autor,fecha FROM noticia where idnoticia={$idnoticia}")->row();
    }

    public function actualizar($param)
    {
        $campos=array(
            'titulo'=>$param['titulo'],
            'texto'=>$param['texto'],
            'fecha'=>$param['fecha'],
        );

        $this->db->update('noticia',$campos);
    }
}