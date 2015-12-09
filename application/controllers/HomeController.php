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

        $this->load->database();
        $this->load->model('Cadastrar');

    }

    public function index()//para login normal
    {
        $this->load->view('home');
    }

    public function criarConta()//para criar uma nova conta
    {
        $data['nome'] = $_POST['nome'];
        $data['email'] = $_POST['email'];
        $data['senha'] = $_POST['senha'];

        $this->Cadastrar->inserir($data);

        $this->load->view('home');
    }
}