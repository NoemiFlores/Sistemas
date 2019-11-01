<?php

class Mlogin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function can_login($usuario,$contra)
    {
        $this->db->where('usuario',$usuario);
        $this->db->where('contra',$contra);
        $query=$this->db->get('persona');

        if($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}