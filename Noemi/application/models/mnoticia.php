<?php

class Mnoticia extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function getTabla()
    {
        return $this->db->get('noticias');
    }
    public function getNoticias()
    {
        $this->db->query("SELECT*FROM noticias");
        return $result->row();
    }
}