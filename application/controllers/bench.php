<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Bench extends CI_Controller {

	
	function __construct() {
		parent::__construct();
		$this->load->model('mbench');
        $this->mbench = new MBench;
	}
	
	function index(){
		$this->run();
	}
	
	function test(){
		echo 'testing';
	}
	function run() {
		$sql = $this->mbench->multiInsert();
		for ($i=0; $i<1000; $i++){
			$sql;
			echo 'took='.$_SESSION ['query_exec_time'];
			echo $i.'<br/>';
		}
	}
	
}