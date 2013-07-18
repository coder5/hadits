<?php

/* By Haidar Mar'ie
 * Email = coder5@ymail.com
  marticle */

class MHadits extends CI_Model {

	private $sqlite;
	//private $lite;
    function __construct() {
        parent::__construct();
        $this->sqlite = $this->load->database('sqlite', TRUE);
		$lite = $this->load->database('sqlite', TRUE);
    }

    function searchHaditsBool($words, $words_min = NULL,$imam_id) {
        $extract = $words;
        $imam = $imam_id != 0 ? " AND a.imam_id = '$imam_id'" : "";
        $sql = "SELECT * FROM `had_all` a
				WHERE MATCH (isi_indonesia) AGAINST ('$words $words_min' IN BOOLEAN MODE) $imam
				ORDER BY imam_id ASC;";
        $sqlite = "SELECT * FROM `had_all_fts4`
		        WHERE isi_indonesia MATCH '$words $words_min' $imam
		        ORDER BY imam_id ASC";
        echo $sqlite; //;exit;
		$msc=microtime(true);
        $query = $this->sqlite->query($sqlite);
//         $query2 = $this->sqlite->get('had_all_fts4', 10, 20);
        //echo $this->last_query();
		query_exec_time(microtime(true)-$msc);
        return $query;
    }

    function searchHaditsNo($imam_id, $no) {
        $sql = "SELECT * FROM had_all_fts4 a
				INNER JOIN imam i ON a.imam_id = i.imam_id
				WHERE a.imam_id ='$imam_id' AND a.no_hdt = '$no'";
        echo $sql;
        $msc=microtime(true);
        $query = $this->db->query($sql);
		query_exec_time(microtime(true)-$msc);
        return $query;
    }

    function searchHaditsBoolArab($words, $words_min = NULL,$imam_id) {
        $extract = $words;
        $imam = $imam_id != 0 ? " AND a.imam_id = '$imam_id'" : "";
        $sql = "SELECT a.no_hdt as no_hdt,tema, isi_indonesia, imam_nama, isi_arab FROM `had_all_fts4` a
		    	WHERE MATCH (isi_arab_Gundul) AGAINST ('$words $words_min' IN BOOLEAN MODE) $imam
		    	ORDER BY a.imam_id ASC;
		    	";
        $sqlite = "SELECT no_hdt, tema, isi_indonesia, imam_id, isi_arab FROM `had_all_fts4`
		        WHERE isi_indonesia MATCH '$words $words_min' $imam
		        ORDER BY imam_id ASC";
        //echo $sql;
        //die($sql);exit;
        $msc=microtime(true);
        $query = $this->db->query($sql);
		query_exec_time(microtime(true)-$msc);
        return $query;
    }

    function searchHaditsLike($words,$imam_id) {
        $extract = $words;
        $imam = $imam_id != 0 ? " AND a.imam_id = '$imam_id'" : "";
        $sql = "SELECT * FROM `had_all_fts4` a INNER JOIN imam i ON a.imam_id = i.imam_id WHERE isi_indonesia LIKE '%$words%' $imam";
        //die($sql);exit;
        $msc=microtime(true);
        $query = $this->db->query($sql);
		query_exec_time(microtime(true)-$msc);
        return $query;
    }

    function searchHaditsLikeExact($words,$imam_id) {
        $extract = $words;
        $imam = $imam_id != 0 ? " AND a.imam_id = '$imam_id'" : "";
        $sql = "SELECT * FROM `had_all_fts4` a INNER JOIN imam i ON a.imam_id = i.imam_id WHERE isi_indonesia LIKE '% $words %' $imam";
        //die($sql);exit;
        $msc=microtime(true);
        $query = $this->db->query($sql);
		query_exec_time(microtime(true)-$msc);
        return $query;
    }

    function searchHaditsLikeArab($words,$imam_id) {
        $extract = $words;
        $imam = $imam_id != 0 ? " AND a.imam_id = '$imam_id'" : "";
        $sql = "SELECT * FROM `had_all_fts4` a INNER JOIN imam i ON a.imam_id = i.imam_id WHERE isi_arab_Gundul LIKE '%$words%' $imam";
        //die($sql);exit;
        $msc=microtime(true);
        $query = $this->db->query($sql);
		query_exec_time(microtime(true)-$msc);
        return $query;
    }

    function searchHaditsLikeExactArab($words,$imam_id) {
        $extract = $words;
        $imam = $imam_id != 0 ? " AND a.imam_id = '$imam_id'" : "";
        $sql = "SELECT * FROM `had_all_fts4` a INNER JOIN imam i ON a.imam_id = i.imam_id WHERE isi_arab_Gundul LIKE '% $words %' $imam";
        //die($sql);exit;
        $msc=microtime(true);
        $query = $this->db->query($sql);
		query_exec_time(microtime(true)-$msc);
        return $query;
    }

    function getAllKitab($imam) {
        $sql = "SELECT * FROM kitab_all k
        		WHERE k.imam_id ='" . imam_id($imam) . "'";
        //echo $sql;
        $msc=microtime(true);
        $query = $this->db->query($sql);
		query_exec_time(microtime(true)-$msc);
        return $query->result();
    }
	
    function getIdKitab($imam, $kitab_imam_id) {
        $sql = "SELECT * FROM kitab_all WHERE kitab_imam_id=" . $kitab_imam_id ."
        		AND imam_id ='" . imam_id($imam) . "'";
        $msc=microtime(true);
        $query = $this->db->query($sql);
		query_exec_time(microtime(true)-$msc);
        return $query->row();
    }

    function getAllBab($imam, $kitab_imam_id) {
        $sql = "SELECT * FROM bab_all WHERE kitab_imam_id = " . $kitab_imam_id ."
        		AND imam_id = '" .imam_id($imam). "'";
        //echo $sql;
        $msc=microtime(true);
        $query = $this->db->query($sql);
		query_exec_time(microtime(true)-$msc);
        return $query->result();
    }

    function getIdBab($imam, $bab_imam_id) {
        $sql = "SELECT * FROM bab_all  WHERE bab_imam_id=" . $bab_imam_id ."
        		AND imam_id = '".imam_id($imam)."'";
        $msc=microtime(true);
        $query = $this->db->query($sql);
		query_exec_time(microtime(true)-$msc);
        return $query->row();
    }

    function getTemaIdBab($imam, $bab_imam_id) {
        $sql = "SELECT no_hdt, tema FROM had_all WHERE bab_imam_id=" . $bab_imam_id ."
        		AND imam_id = " . imam_id($imam) . "";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getHaditsIdHdt($imam, $id_hadits) {
        $sql = "SELECT * FROM had_all WHERE no_hdt='" . $id_hadits ."'
        		AND imam_id ='" . imam_id($imam) . "'";
        $query = $this->db->query($sql);
        return $query->row();
    }

}