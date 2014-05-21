<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Charts extends CI_Controller {

	
	function __construct() {
		parent::__construct();
		$this->load->model('mhadits');
        $this->mhadits = new MHadits();
	}
	
	function index(){
		$this->get_count();
	}
	
	function get_count(){
		$this->load->view("count");
	}
	
	function data_count(){
		$counts = $this->mhadits->countHadits();
		foreach($counts->result() as $count) {
			// 	echo $count->imam_nama;
			// 	echo $count->c;
			// 	echo '<br>';
			echo $count->imam_nama . "\t" . $count->c. "\n";
		}
	}
}