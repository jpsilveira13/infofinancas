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
    public $frequencia;
    public $parcelas;

    public function __construct()
    {
        parent::__construct();
    }

    public function getMovimentacoes($idUsuario)
    {
        $this->db->where("idUsuario", $idUsuario);
        return $this->db->get("movimentacao")->result();
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