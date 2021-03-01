<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_model {

	function __construct(){
        $this->load->database(); //carregando a biblioteca de banco de dados
		parent::__construct(); 
	}

    public function get_news($uri = false){
        
        if($uri === false){
            $query = $this->db->get('news'); // recupera tudo do banco de dados news
            return $query->result_array();
        } else {
            $query = $this->db->get_where('news', array('uri'=>$uri)); //uri é uma coluna do banco de dados
            return $query->row_array();
        }
    }


    public function set_news(){
        $this->load->helper('url');
        $uri = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'uri' => $uri,
            'text' => $this->input->post('text')
        );

        $this->db->insert('news', $data);

    }

}
