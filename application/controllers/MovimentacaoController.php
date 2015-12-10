<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class HomeController
 */
class MovimentacaoController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();// chama as configs do ../config/database.php
        $this->load->model('MovimentacaoModel');// chama o modelo CadastrarModel
    }

    public function index()
    {
        $data = [
            'id' => 500,
            'idUsuario' => 1,
            'nome' => 'teste',
            'descricao' => 'desc teste',
            'tipo' => 'DESPESA',
            'valor' => 100,
            'vencimento' => '2015-12-10'
        ];

        echo $this->MovimentacaoModel->create($data);



        //$this->load->view('home');
    }

    public function create()
    {
        echo "fuck";
    }
}