<?php

class Mnoticias extends CI_Model
{
    function __contstruct()
    {
        parent::__construct();
    }

    public function guardar($param)
    {
        $campos=array(
            'titulo'=>$param['titulo'],
            'texto'=>$param['texto'],
            'autor'=>$param['autor'],
            'fecha'=>$param['fecha'],
        );

        $this->db->insert('noticia',$campos);
    }
}