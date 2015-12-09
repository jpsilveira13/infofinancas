<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class HomeController
 */
class HomeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();// chama as configs do ../config/database.php
        $this->load->model('CadastrarModel');// chama o modelo CadastrarModel
        $this->load->model("LoginModel");// chama o modelo LoginModel

    }

    public function index()//para login normal
    {
        $data['email'] = $_POST['email'];// pega via post o email que venho do formulario
        $data['senha'] = $_POST['senha']; // pega via post a senha que venho do formulario
        $usuario = $this->LoginModel->buscaPorEmailSenha($data['email'],$data['senha']); // acessa a função buscaPorEmailSenha do modelo

        if($usuario){
            $this->load->view('home');//chama a tela inicial
        }else{
            echo "não deu certo!";
        }
    }

    public function criarConta()//para criar uma nova conta
    {
        $data['nome'] = $_POST['nome'];
        $data['email'] = $_POST['email'];
        $data['senha'] = $_POST['senha'];

        $this->CadastrarModel->inserir($data);

        $this->load->view('home');
    }
}