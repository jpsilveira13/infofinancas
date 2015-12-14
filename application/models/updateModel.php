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

        $data_msg['response'] = json_encode([
            'status' => 'SUCCESS',
            'title' => 'Pronto',
            'message' => 'Dados Editados'
        ]);

        $this->session->set_userdata($data);//cria a session


        $this->template->load('content/default/_layout', 'content/profile/index', $data_msg);
    }

    public function setDescricao($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('usuario', $data);

        $data_msg['response'] = json_encode([
            'status' => 'SUCCESS',
            'title' => 'Pronto',
            'message' => 'Descrição Atualizada'
        ]);

        $this->session->set_userdata($data);//cria a session

        $this->template->load('content/default/_layout', 'content/profile/index', $data_msg);
    }
}
