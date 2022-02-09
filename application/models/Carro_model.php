<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carro_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($p) {
        return $this->db->insert('carro', $p); //'pessoa' é o nome da tabela
    }

    function deletar($idCarro) {
        $this->db->where('idCarro', $idCarro);
        return $this->db->delete('carro');
    }

    function editar($idCarro) {
        $this->db->where('idCarro', $idCarro);
        $result = $this->db->get('carro');
        return $result->result();
    }

    function atualizar($data) {
        $this->db->where('idCarro', $data['idCarro']);
        $this->db->set($data);
        return $this->db->update('carro');
    }

    function listar() {
        $this->db->select('*');
        $this->db->from('carro');
        $this->db->order_by('marca','ASC');
        $this->db->order_by('modelo','ASC');
        $query = $this->db->get();
        return $query->result();
    }

}
