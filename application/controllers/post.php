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
		echo 'post'.FCPATH;
		$post = $this->input->post();
		//print_r($post);exit;
		if($post) {
			$data = implode(',',$post);
			//$data['data'] = $post['data'];
			//$id = $this->msaves->insertPost($data);
			//echo 'insert id is'.$id;
			$fp = fopen(FCPATH.'assets' . "/post.txt","wb");
			fwrite($fp,$data);
			fclose($fp);
		}
		
		
		print_r($post);
	}
	
	
	
}
