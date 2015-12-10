<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class ProfileController
 */
class ProfileController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();// chama as configs do ../config/database.php
        $this->load->model('UpdateModel');// chama o modelo CadastrarModel
    }

    public function index()//para login normal
    {
        $this->load->view('profile');//chama a tela do perfil

    }

    public function upload()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

        if (  $this->upload->do_upload())
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }

    }

    public function editar()
    {
        $data['nome'] = $_POST['nome'];//recebe o nome digitado
        $data['email'] = $_POST['email'];//recebe o email digitado
        $data['senha'] = $_POST['senha'];//recebe a senha digitada
        $data['id'] = $this->session->userdata('id');//pega o id da session atual

        $this->UpdateModel->editar($data);
    }
}