<?php

class UpdateModel extends CI_Model
{
    public $nome;
    public $email;
    public $senha;
    public $descricao;

    public function __construct()
    {
        parent::__construct();
    }

    public function editar($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('usuario', $data);

        $this->load->view('profile');
    }

    public function setDescricao($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('usuario', $data);

        $this->load->view('profile');
    }
}
