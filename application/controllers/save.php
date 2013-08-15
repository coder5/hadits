<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Save extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('msaves');
	}

	public function index($docid,$nots) {
		//echo 'test';
		$this->save_notes($docid,$nots);
	}
	
	public function save_notes($docid,$notes) {
		$data['save'] = $this->msaves->saveNotes($docid,$notes);
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