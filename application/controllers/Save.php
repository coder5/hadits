<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Save extends CI_Controller {

	protected  $msaves;
	
	function __construct() {
		parent::__construct();
		$this->load->model('msaves',TRUE);
        $this->msaves = new MSaves();
	}

	public function index($docid,$notes) {
		$this->save_notes($docid,$notes);
	}
	
	public function new_category(){
		$post = $this->input->post();
		if ($post) {
			$data['category'] = $this->msaves->saveCategory($post);
		} else {
			$this->load->template("hadits/notes/new_category", $data);
		}
		//return $data;
	}
	
	public function save_notes() {
		$post = $this->input->post();
		$data['save'] = $this->msaves->saveNotes($post['docid'],$post['notes']);
		//return $data;
	}
	
	public function view_note($note_id){
		table_use2('fts');
		$data['note'] = $this->msaves->viewNote($note_id);
		$this->load->template("hadits/notes/view_note", $data);
	}
	
	public function list_notes(){
		$data['lists'] = $this->msaves->listNotes();
		$this->load->template("hadits/notes/list_notes", $data);
	}
	
	function get_version() {
		echo APPPATH;
		echo CI_VERSION; // echoes something like 1.7.1
	}
}
?>