<?php

/* By Haidar Mar'ie
 * Email = coder5@ymail.com
 
 ok @FAUZI ... coba deh ambil wudhu .. solat 2 rakaat .. lalu liat lagi rumus nya .. biar otak n tubuh nte fresh .. dan dapet jawaban tepat ..
 
  marticle */

class MSaves extends CI_Model {

	private $sqlite;
	public static $db = DBUSE;
	private $DBUSE;
// 	private TABLEUSE = 
	//private $lite;
    function __construct() {
        parent::__construct();
//         $db = $this->
		$this->DBUSE = DBUSE;
// 		$this->had_table = TABLEUSE;
        $this->sqlite = $this->load->database('sqlite', TRUE);
		$lite = $this->load->database('sqlite', TRUE);
    }
	
	function listNotes(){
		return $query = $this->db->get('notes');
	}
	
	function saveNotes($docid, $notes) {
		$this->db->select('docid,*');
		$query = $this->db->get_where('had_all_fts4', array('docid' => $docid));
		$data = $query->row_array();
		$this->db->insert('notes', $data); 
		print_r($data);
	}
	
	
}
?>