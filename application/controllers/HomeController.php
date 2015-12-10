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

    public function index()//padrão para chamar a home
    {
        if($this->session->userdata('id')){
            $this->load->view('home');
        } else {
            $this->load->view('login');
        }
    }

    public function login()//para login normal
    {
        $data['email'] = $_POST['email'];// pega via post o email que venho do formulario
        $data['senha'] = $_POST['senha']; // pega via post a senha que venho do formulario
        $usuario = $this->LoginModel->buscaPorEmailSenha($data['email'],$data['senha']); // acessa a função buscaPorEmailSenha do modelo

        if($usuario){
            $this->session->set_userdata($usuario);//cria a session
            $this->load->view('home');//chama a tela inicial
            //var_dump($this->session->userdata('id'));
        }else{
            $this->load->view('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('login');
    }

    public function criarConta()//para criar uma nova conta
    {
        $data['nome'] = $_POST['nome'];//recebe o nome digitado
        $data['email'] = $_POST['email'];//recebe o email digitado
        $data['senha'] = $_POST['senha'];//recebe a senha digitada

        $this->CadastrarModel->inserir($data);//chama a função inserir e passa os dados como parametros

        $this->load->view('login');//carrega a view home
    }

    public function buscarDados(){
        $dados = [10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65];
        return $dados;
    }

    public function registrar()
    {
        $this->load->view('register');
    }
}