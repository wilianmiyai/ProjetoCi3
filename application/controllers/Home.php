<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('Login');
        }
        //contatos é um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
//        $dados['acronico'] = "MPF";
//        $dados['completo'] = "Meu Projeto Framework";
//        $this->load->view('home', $dados);
        $this->load->view('home');
        $this->load->view('template/footer');
    }

}
