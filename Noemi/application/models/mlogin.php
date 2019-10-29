<?php

class Mlogin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($usuario,$contra)
    {
        /*nos devuelve una fila si existe*/
        $this->db->where('usuario',$usuario);
        $this->db->where('contra',$contra);
        $q=$this->db->get('persona');
        if($q->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}