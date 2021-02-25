<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


	function __construct(){
		parent::__construct();
	}

    /**
     * Carrega todas as paginas estáticas do sistema
     * @page = pagina para ser carregada
     * home como default
     * sempre lembrar do /index.php/
     */
	public function view($page = 'home') { 
        if(!file_exists(APPPATH.'/views/pages/'.$page.'.php')){
            show_404();
        }

        $data['title'] = ucfirst($page);
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}
