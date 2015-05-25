<?php

/*
 * By Haidar Mar'ie Email = coder5@ymail.com MHadits
 */
class MQuran extends CI_Model {
	private $sqlite;
	public static $db = DBUSE;
	private $DBUSE;
	// private TABLEUSE =
	// private $lite;
	
	function __construct() {
		parent::__construct ();
		$this->qurandb = $this->load->database('sqlite_quran', true);   
	}
	
	function searchQuranBool($words, $words_min = NULL, $limit = null) {
		$this->qurandb->select ( '* ', FALSE );
		$this->qurandb->where ( "ayah_text MATCH '" . $words . $words_min ."' ", NULL, FALSE );
		$msc = microtime ( true );
		$this->qurandb->join('quran_arab', 'quran_arab.arab_id = QuranFTS.id');
		$query = $this->qurandb->get ( 'QuranFTS' );
		$this->firephp->log ( $this->qurandb->last_query () );
		query_exec_time ( microtime ( true ) - $msc );
		return $query;
	}
	
	function get_surah($sura_id,$aya_id=FALSE) {
		$aya = $aya_id ? array('quran_arab.aya_id' => $aya_id) : array();
		$this->qurandb->join('quran_arab', 'quran_arab.arab_id = Quran.id');
		$query = $this->qurandb->get_where('Quran', array('quran_arab.sura_id' => $sura_id) + $aya);
		$this->firephp->log($this->qurandb->last_query());
		return $query;
	}
	
}