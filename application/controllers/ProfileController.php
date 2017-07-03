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
        $this->load->library('image_lib');
    }

    public function index()//para login normal
    {
        $data['response'] = json_encode([
            'status' => 'SUCCESS',
            'title' => 'Bem vindo ao Info',
            'message' => 'Perfil'
        ]);

        $this->template->load('content/default/_layout', 'content/profile/index', $data);//chama a tela do profile
    }

    public function upload()//imagem no banco
    {
        //Configurações necessárias para fazer upload do arquivo
        $config['upload_path'] = './upload/';//Pasta onde será feito o upload
        $config['allowed_types'] = 'gif|jpg|png';//Tipos suportados
        $config['max_size'] = '1000000';//Configurando atributos do arquivo imagem que iremos receber
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';

        $this->load->library('upload', $config);//Carregando a lib com as configurações feitas

        $this->upload->do_upload('arquivo');

        $this->setFoto($this->upload->data('file_name'));

        //falta alterar usuario no banco e retorna a view do profile com response de sucesso.
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

    public function setFoto($fotoEnd)
    {
        $foto = $fotoEnd;

        $data['id'] = $this->session->userdata('id');//pega o id da session atual
        $data['fotoPerfil'] = "/upload/" . $foto;//recebe a descrição digitada

        $this->fotoSmall($foto);

        $this->UpdateModel->setFoto($data);
    }

    public function fotoSmall($foto)
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] = '/upload/' . $foto;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 75;
        $config['height'] = 50;

        $this->load->library('image_lib', $config);

        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        }else{
            $this->image_lib->resize();
        }
    }

}