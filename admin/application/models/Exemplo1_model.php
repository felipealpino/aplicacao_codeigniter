<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1_model extends CI_model {


	function __construct(){
		parent::__construct();
	}

	public function salvar(){
		echo "executado o metodo salvar do nosso exemplo1_model";
	}
}
