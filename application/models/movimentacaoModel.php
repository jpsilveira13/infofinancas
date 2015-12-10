<?php

class MovimentacaoModel extends CI_Model
{
    public $id;
    public $idUsuario;
    public $nome;
    public $descricao;
    public $tipo;
    public $valor;
    public $vencimento;
    public $frequecia;
    public $parcelas;

    public function __construct()
    {
        parent::__construct();
    }

    public function getMovimentacoes()
    {

    }

    public function create($data)
    {
        return $this->db->insert('movimentacao', $data);
    }

    public function update($data, $id)
    {

    }

    public function destroy($id)
    {

    }
}