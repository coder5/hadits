<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Save extends CI_Controller {

	protected  $msaves;
	
	
	function __construct() {
		parent::__construct();
		$this->load->model('msaves',TRUE);
        $this->msaves = new MSaves();
	}

	public function index($docid,$notes) {
		//echo 'test';
		$this->save_notes($docid,$notes);
	}
	
	public function save_notes() {
		$post = $this->input->post();
		$data['save'] = $this->msaves->saveNotes($post['docid'],$post['notes']);
		return $data;
	}
	
	public function list_notes(){
		$data['lists'] = $this->msaves->listNotes();
		$this->load->view("header", $data);
		//print_r($data['lists']->result());
		$this->load->view("notes/list_notes", $data);
		$this->load->view("footer", $data);
	}
	
	function get_version() {
		echo APPPATH;
		echo CI_VERSION; // echoes something like 1.7.1
	}
}
?>