<?php

/*
 * By Haidar Mar'ie Email = coder5@ymail.com MHadits
 */
class Mbench extends CI_Model {
	private $sqlite;
	public static $db = DBUSE;
	private $DBUSE;
	// private TABLEUSE =
	// private $lite;
	
	function __construct() {
		parent::__construct ();
	}
	
	function multiInsert(){
		$sql = "INSERT IGNORE INTO bench SELECT FLOOR(RAND()*100000) FROM had_all;";
		$msc = microtime ( true );
		$query = $this->db->query($sql);
		query_exec_time ( microtime ( true ) - $msc );
		return $query;
	}
	
}