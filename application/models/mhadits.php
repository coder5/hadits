<?php

/* By Haidar Mar'ie
 * Email = coder5@ymail.com
  marticle */

class MHadits extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function searchHaditsBool($words, $words_min = NULL,$imam_id) {
        $extract = $words;
        $imam = $imam_id != 0 ? " AND a.imamId = '$imam_id'" : "";
        $sql = "SELECT a.NoHdt as NoHdt, Isi_Indonesia, longNama, Isi_Arab FROM `had_all` a
				INNER JOIN had_imam i ON a.imamId = i.imamId
				WHERE MATCH (Isi_Indonesia) AGAINST ('$words $words_min' IN BOOLEAN MODE) $imam
				ORDER BY i.imamSorting ASC;
				";
        /*AND i.imamId =2 */
        //echo $sql; //;exit;
        $query = $this->db->query($sql);
        return $query;
    }

    function searchHaditsNo($imam_id, $no) {
        $sql = "SELECT * FROM had_all a
				INNER JOIN had_imam i ON a.imamId = i.imamId
				WHERE a.imamId ='$imam_id' AND a.NoHdt = '$no'";
        $query = $this->db->query($sql);
        return $query;
    }

    function searchHaditsBoolArab($words, $words_min = NULL,$imam_id) {
        $extract = $words;
        $imam = $imam_id != 0 ? " AND a.imamId = '$imam_id'" : "";
        $sql = "SELECT a.NoHdt as NoHdt, Isi_Indonesia, longNama, Isi_Arab FROM `had_all` a
		    	INNER JOIN had_imam i ON a.imamId = i.imamId
		    	WHERE MATCH (Isi_Arab_Gundul) AGAINST ('$words $words_min' IN BOOLEAN MODE) $imam
		    	ORDER BY i.imamSorting ASC;
		    	";
        //echo $sql;
        //die($sql);exit;
        $query = $this->db->query($sql);
        return $query;
    }

    function searchHaditsLike($words,$imam_id) {
        $extract = $words;
        $imam = $imam_id != 0 ? " AND a.imamId = '$imam_id'" : "";
        $sql = "SELECT * FROM `had_all` a INNER JOIN had_imam i ON a.imamId = i.imamId WHERE Isi_Indonesia LIKE '%$words%' $imam";
        //die($sql);exit;
        $query = $this->db->query($sql);
        return $query;
    }

    function searchHaditsLikeExact($words,$imam_id) {
        $extract = $words;
        $imam = $imam_id != 0 ? " AND a.imamId = '$imam_id'" : "";
        $sql = "SELECT * FROM `had_all` a INNER JOIN had_imam i ON a.imamId = i.imamId WHERE Isi_Indonesia LIKE '% $words %' $imam";
        //die($sql);exit;
        $query = $this->db->query($sql);
        return $query;
    }

    function searchHaditsLikeArab($words,$imam_id) {
        $extract = $words;
        $imam = $imam_id != 0 ? " AND a.imamId = '$imam_id'" : "";
        $sql = "SELECT * FROM `had_all` a INNER JOIN had_imam i ON a.imamId = i.imamId WHERE Isi_Arab_Gundul LIKE '%$words%' $imam";
        //die($sql);exit;
        $query = $this->db->query($sql);
        return $query;
    }

    function searchHaditsLikeExactArab($words,$imam_id) {
        $extract = $words;
        $imam = $imam_id != 0 ? " AND a.imamId = '$imam_id'" : "";
        $sql = "SELECT * FROM `had_all` a INNER JOIN had_imam i ON a.imamId = i.imamId WHERE Isi_Arab_Gundul LIKE '% $words %' $imam";
        //die($sql);exit;
        $query = $this->db->query($sql);
        return $query;
    }

    function getAllKitab($imam) {
        $sql = "SELECT * FROM datakitab_" . $imam . " ";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getIdKitab($imam, $id_kitab) {
        $sql = "SELECT * FROM datakitab_" . $imam . " WHERE ID_Kitab=" . $id_kitab;
        $query = $this->db->query($sql);
        return $query->row();
    }

    function getAllBab($imam, $id_kitab) {
        $sql = "SELECT * FROM databab_" . $imam . " WHERE ID_Kitab = " . $id_kitab;
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getIdBab($imam, $id_bab) {
        $sql = "SELECT * FROM databab_" . $imam . " WHERE ID_Bab=" . $id_bab;
        $query = $this->db->query($sql);
        return $query->row();
    }

    function getTemaIdBab($imam, $id_bab) {
        $sql = "SELECT * FROM tema_" . $imam . " WHERE ID_Bab=" . $id_bab;
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getHaditsIdHdt($imam, $id_hadits) {
        $sql = "SELECT * FROM had_" . $imam . " WHERE NoHdt=" . $id_hadits;
        $query = $this->db->query($sql);
        return $query->row();
    }

}