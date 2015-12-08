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
    }

    public function index()//para login normal
    {
        $this->load->view('home');
    }

    public function criarConta()//para criar uma nova conta
    {
        $this->load->model('Cadastrar', '',true);

        $this->Cadastrar->nome = $this->input->post('nome');
        $this->Cadastrar->email = $this->input->post('email');
        $this->Cadastrar->senha = $this->input->post('senha');


        $this->load->view('home');
    }
}