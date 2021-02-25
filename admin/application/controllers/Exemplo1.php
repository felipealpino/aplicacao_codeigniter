<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('Exemplo1_model'); // carrega o model para ser utilizado nesse arquivo
	}

	public function index() {
		$dados['titulo'] = "Essa é a view exemplo1";
		$dados['conteudo'] = "Esse é o conteudo do exemplo1";
		$this->load->view('exemplo1', $dados);
	}

	public function login(){
		$this->Exemplo1_model->salvar();
	}
}
