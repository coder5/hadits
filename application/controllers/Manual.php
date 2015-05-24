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
		$this->load->template('hadits/kitab_view',$data);
	}

	public function bab($imam,$id_kitab){
		$data['imam'] = $imam;
		$data['kitab'] = $this->mhadits->getIdKitab($imam, $id_kitab);
		$data['last_kitab'] = last_kitab($data['kitab']->kitab_indonesia);
		$data['bab'] = $this->mhadits->getAllBab($imam, $id_kitab);
		$this->load->template('hadits/bab_view',$data);
	}

	public function tema($imam,$id_bab){
		$data['imam'] = $imam;
		table_use2("content");
		$data['bab'] = $this->mhadits->getKitabBabId($imam, $id_bab);
		$data['last_kitab'] =  $data['bab']->kitab_indonesia;
		$data['last_bab'] = $data['bab']->bab_indonesia;
		$data['hadits'] = $this->mhadits->getTemaIdBab($imam, $id_bab);
		$this->load->template('hadits/tema_view',$data);
	}

	public function hadits($imam,$id_hadits){
		$data['imam'] = $imam;
		table_use2("content");
		//$data['kitab'] = $this->mhadits->getIdKitab($imam, $id_kitab);
		//$data['bab'] = $this->mhadits->getIdBab($imam, $id_hadits);
		$data['hadits'] = $this->mhadits->getHaditsIdHdt($imam, $id_hadits);
		$this->load->template('hadits/hadits_view', $data);
	}
}

