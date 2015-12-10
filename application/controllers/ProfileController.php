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
        $this->load->helper(array('form'));
    }

    public function index()//para login normal
    {
        $data['response'] = json_encode([
            'status' => 'SUCCESS',
            'title' => 'Bem vindo ao Dynado',
            'message' => 'Controle de Finanças'
        ]);
        $this->load->view('profile', $data);//chama a tela do perfil

    }

    public function upload()
    {
        //Configurações necessárias para fazer upload do arquivo

        //die(print_r($_GET['arquivo']));

        $config['upload_path'] = './upload/';//Pasta onde será feito o upload
        $config['allowed_types'] = 'gif|jpg|png';//Tipos suportados
        $config['max_size'] = '1000000';//Configurando atributos do arquivo imagem que iremos receber
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';

        $this->load->library('upload', $config);//Carregando a lib com as configurações feitas

        $this->upload->do_upload('arquivo');

        die(print_r($this->upload->display_errors()));
    }

    public function editar()
    {
        $data['nome'] = $_POST['nome'];//recebe o nome digitado
        $data['email'] = $_POST['email'];//recebe o email digitado
        $data['senha'] = $_POST['senha'];//recebe a senha digitada
        $data['id'] = $this->session->userdata('id');//pega o id da session atual

        $this->UpdateModel->editar($data);
    }

    public function setDescricao()
    {
        $data['id'] = $this->session->userdata('id');//pega o id da session atual
        $data['descricao'] = $_POST['descricao'];//recebe a descrição digitada

        $this->UpdateModel->setDescricao($data);
    }
}