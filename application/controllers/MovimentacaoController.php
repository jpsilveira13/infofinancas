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
        //Inicializando o FormValidation.
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('descricao', 'Descrição', 'required');
        $this->form_validation->set_rules('tipo', 'Tipo', 'required');
        $this->form_validation->set_rules('vencimento', 'Vencimento', 'required');
        $this->form_validation->set_rules('valor', 'Valor', 'required|decimal');
        $this->form_validation->set_rules('frequencia', 'Frequencia', 'required');
        $this->form_validation->set_rules('parcelas', 'Parcela', 'required|numeric');

        $this->form_validation->set_message('required', 'O campo %s é obrigatório.');
        $this->form_validation->set_message('decimal', 'O campo %s deve conter um número decimal.');
        $this->form_validation->set_message('numeric', 'O campo %s deve conter um número.');

        //$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('formMovimentacao');
        }
        else
        {
            $this->store();
        }
    }

    public function store()
    {
        $dataPT = explode('/', $_POST['vencimento']);
        $dataEN = $dataPT[2] . '-' . $dataPT[1] . '-' . $dataPT[0];
        $data = [
            'idUsuario' => $this->session->userdata('id'),
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'tipo' => $_POST['tipo'],
            'valor' => $_POST['valor'],
            'vencimento' =>$dataEN,
            'frequencia' => $_POST['frequencia'],
            'parcelas' => $_POST['parcelas']
        ];

        $this->MovimentacaoModel->create($data);

        $this->load->view('home');
    }
}