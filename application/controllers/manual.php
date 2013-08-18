<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manual extends CI_Controller {

	protected  $mhadits;
	
	function __construct() {
		parent::__construct();
		$this->load->model('mhadits', TRUE);
		$this->mhadits = new MHadits();
	}

	public function index()
	{
		$this->kitab();
	}

	public function kitab($imam){
		$data['imam'] = $imam;
		$data['kitab'] = $this->mhadits->getAllKitab($imam);
		$this->load->view("header");
		$this->load->view('kitab_view',$data);
		$this->load->view("footer");
	}

	public function bab($imam,$id_kitab){
		$data['imam'] = $imam;
		$data['kitab'] = $this->mhadits->getIdKitab($imam, $id_kitab);
		$data['last_kitab'] = last_kitab($data['kitab']->kitab_indonesia);
		$data['bab'] = $this->mhadits->getAllBab($imam, $id_kitab);
		$this->load->view("header");
		$this->load->view('bab_view',$data);
		$this->load->view("footer");
	}

	public function tema($imam,$id_bab){
		$data['imam'] = $imam;
		table_use2("content");
		//$data['kitab'] = $this->mhadits->getIdKitab($imam, $id_kitab);
		$data['bab'] = $this->mhadits->getIdBab($imam, $id_bab);
		//$data['last_kitab'] = last_kitab();
		$data['last_bab'] = $data['bab']->bab_indonesia;
		$data['hadits'] = $this->mhadits->getTemaIdBab($imam, $id_bab);
		$this->load->view("header");
		$this->load->view('tema_view',$data);
		$this->load->view("footer");
	}

	public function hadits($imam,$id_hadits){
		$data['imam'] = $imam;
		table_use2("content");
		//$data['kitab'] = $this->mhadits->getIdKitab($imam, $id_kitab);
		//$data['bab'] = $this->mhadits->getIdBab($imam, $id_hadits);
		$data['hadits'] = $this->mhadits->getHaditsIdHdt($imam, $id_hadits);
		$this->load->view("header");
		$this->load->view('hadits_view', $data);
		$this->load->view("footer");
	}
}

