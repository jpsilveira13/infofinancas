<?php

class UpdateModel extends CI_Model
{
    public $nome;
    public $email;
    public $senha;

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

    public function setDescrição()
    {
        $data['descricao'] = $_POST['descricao'];//recebe a descrição digitada
    }
}
