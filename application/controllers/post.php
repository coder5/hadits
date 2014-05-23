<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Post extends CI_Controller {

	
	function __construct() {
		parent::__construct();
		$this->load->model('msaves');
        $this->msaves = new MSaves();
	}

	public function index() {
		echo 'post';
		$post = $this->input->post();
		$data['data'] = $post;
		$this->msaves->insertPost($post);
		print_r($post);
	}
	
	
	
}
