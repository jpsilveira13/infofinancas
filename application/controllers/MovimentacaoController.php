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
        $this->load->library('form_validation');// chama o FormValidation.
    }

    public function index()
    {
        //Inicializando o FormValidation.
        $this->load->helper(array('form', 'url'));

        //Definindo as regras
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('descricao', 'Descrição', 'required');
        $this->form_validation->set_rules('tipo', 'Tipo', 'required');
        $this->form_validation->set_rules('vencimento', 'Vencimento', 'required');
        $this->form_validation->set_rules('valor', 'Valor', 'required|numeric');
        $this->form_validation->set_rules('frequencia', 'Frequencia', 'required');
        $this->form_validation->set_rules('parcelas', 'Parcelas', 'required|numeric');

        //Definindo as menssagens
        $this->form_validation->set_message('required', 'O campo %s é obrigatório.');
        $this->form_validation->set_message('numeric', 'O campo %s deve conter um número.');

        if ($this->form_validation->run() == FALSE) {
            if (isset($_POST['nome'])) {

                $data['response'] = json_encode([
                    'status' => 'ERROR',
                    'title' => 'Error',
                    'message' => 'Falha ao enviar seu formulário.'
                ]);

            } else {

                $data['response'] = json_encode([
                    'status' => 'SUCCESS',
                    'title' => 'Movimentações',
                    'message' => 'Cadastre uma nova movimentação.'
                ]);
            }
            $this->template->load('content/default/_layout', 'content/movimentacoes/index', $data);
        } else {
            $this->store();
        }
    }

    public function store()
    {
        //Convertendo a data de vencimento
        $dataPT = explode('/', $_POST['vencimento']);
        $dataEN = $dataPT[2] . '-' . $dataPT[1] . '-' . $dataPT[0];

        //Objeto do modelo de movimentação
        $data = [
            'idUsuario' => $this->session->userdata('id'),
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'tipo' => $_POST['tipo'],
            'valor' => $_POST['valor'],
            'vencimento' => $dataEN,
            'frequencia' => $_POST['frequencia'],
            'parcelas' => $_POST['parcelas']
        ];

        $this->MovimentacaoModel->create($data);

        $data['response'] = json_encode([
            'status' => 'SUCCESS',
            'title' => 'Sucesso',
            'message' => 'Movimentação cadastrado com sucesso'
        ]);

        $this->template->load('content/default/_layout', 'content/movimentacoes/index', $data);
    }

    public function delete()
    {
        $this->MovimentacaoModel->destroy($_POST['id']);

        $data['movimentacoes'] = $this->MovimentacaoModel->getMovimentacoes($this->session->userdata('id'));
        $data['response'] = json_encode([
            'status' => 'SUCCESS',
            'title' => 'Sucesso',
            'message' => 'Movimentação deletada com sucesso',
            'movimentacoes' => $this->MovimentacaoModel->getMovimentacoes($this->session->userdata('id'))
        ]);

        $this->template->load('content/default/_layout', 'content/home/index', $data);
    }
}