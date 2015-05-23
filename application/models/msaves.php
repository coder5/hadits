<?php

/* By Haidar Mar'ie
 * Email = coder5@ymail.com
  msaves */

class MSaves extends CI_Model {

	private $sqlite;
	public static $db = DBUSE;
	private $DBUSE;
// 	private TABLEUSE = 
	//private $lite;
	function MSaves() {
		parent::__construct();
	}
	
    // function __construct() {
        // parent::__construct();
		// $this->DBUSE = DBUSE;
		// $this->had_table = TABLEUSE;
        // $this->sqlite = $this->load->database('sqlite', TRUE);
		// $lite = $this->load->database('sqlite', TRUE);
    // }
	
	function listNotes(){
		return $query = $this->db->get('notes');
	}
	
	function viewNote($note_id) {
		$this->db->select('*');
		$this->db->join('bab_all', 'notes.kitab_imam_id = bab_all.kitab_imam_id AND bab_all.imam_id = notes.imam_id', 'inner');
		$this->db->join('kitab_all', 'notes.kitab_imam_id = kitab_all.kitab_imam_id AND kitab_all.imam_id = notes.imam_id', 'inner');
		$query = $this->db->get_where('notes', array('note_id' => $note_id));
		//echo $this->db->last_query();
		return $query->row_array();
	}
	
	function saveNotes($docid, $notes) {
		$this->db->select('docid,*');
		$query = $this->db->get_where('had_all_fts4', array('docid' => $docid));
		$data = $query->row_array();
		$data['notes'] = $notes;
		$this->db->insert('notes', $data); 
		print_r($data);
	}
	
	function saveCategory($data){
		$this->db->insert($data);
		return $this->db->insert_id();
	}
	
	function insertPost($data){
		$this->db->insert('post',$data);
		return $this->db->insert_id();
	}
	
}
?>