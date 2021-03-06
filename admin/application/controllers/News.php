<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
	}

	public function index(){
		$data['news'] = $this->news_model->get_news();
		$data['title'] = "Todas as noticias";
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}


	public function view($uri){
		$data['news_item'] = $this->news_model->get_news($uri);

		if(empty($data['news_item'])){
			show_404();
		}

		$data['title'] = $data['news_item']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');

	}



}
