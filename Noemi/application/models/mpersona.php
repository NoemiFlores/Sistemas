<?php

class Mpersona extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function guardar($nombre,$edad,$email,$genero,$hobbies,$usuario,$contra)
    {
        return $this->db->query("INSERT INTO persona(nombre, edad, email, sexo, hobbie,usuario,contra) values('{$nombre}', '{$edad}', '{$email}', '{$genero}', '{$hobbies}','{$usuario}','{$contra}')");

        // $this->db->insert('persona',$nombre,$edad,$email,$genero,$hobbies);
        // return $this->db->insert_id();
    }   
}