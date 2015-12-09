<?php

class Cadastrar extends CI_Model
{

    public $nome;
    public $email;
    public $senha;

    public function __construct()
    {
        parent::__construct();
    }

    public function inserir($data)
    {
        return $this->db->insert('usuario', $data);
    }

}

