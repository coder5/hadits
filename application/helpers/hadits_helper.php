<?php
date_default_timezone_set('Asia/Jakarta');
define('DBUSE', "sqlite");


function last_kitab($kitab=null) {
	if ($kitab) {
		$_SESSION['last_kitab'] = $kitab;
		//echo 'ke set jadi'. $kitab;
		return $kitab;
	} else {
		if (isset($_SESSION['last_kitab'])) {
			//echo 'last ny dapet';
			return $_SESSION['last_kitab'];
		} else {
			//echo 'last ny ga dapet';
			return "";
		}

	}
}

function search_sess($searchterm){
	if($searchterm) {
		$_SESSION['searchterm'] = $searchterm;
		return $searchterm;
	} elseif($_SESSION['searchterm']) {
		$searchterm = $_SESSION['searchterm'];
		return $searchterm;
	} else {
		$searchterm ="";
		return $searchterm;
	}
}

function type_had($type) {
	if($type == 1) {
		return 'hadits';
	} elseif ($type == 2) {
		return "kitab";
	} elseif ($type == 3) {
		return "bab";
	}
}
function last_bab($bab=null) {
	if ($bab) {
		$_SESSION['last_bab'] = $bab;
		return $bab;
	} else  {
		return $_SESSION['last_bab'];
	}
}

function use_dbs(){
	$db = DBUSE;
	if ($db =='sqlite') {
		return 'sqlite';
	} else {
		return 'default';
	}
}

function table_use(){
	$db = DBUSE;
	if ($db == "sqlite") {
		return 'had_all_fts4';
	} else {
		return "had_all";
	}
}

function table_use2($table) {
	$_SESSION['table_type'] = "fts";
	$table_type = $_SESSION['table_type'];
	if (isset($table_type)) {
		if ($table == "fts"){
			$_SESSION['table_type'] = 'fts';
		} elseif ($table == "content") {
			$_SESSION['table_type'] = 'content';
		}
	}
	// 	echo 'session'. $_SESSION['table_type'];
}
function debug($debug=null){
	debug_backtrace();
	if ($debug != null) {
		$_SESSION['debug'] = "<blockquote><small>".$debug."</small></blockquote>";
		return $_SESSION['debug'];
	} else {
		if(isset($_SESSION['debug'])) {
			return $_SESSION['debug'];
		} else {
			return null;
		}
	}
}

function field($field) {
	$table_type = $_SESSION['table_type'];
	// 	echo $table_type;//die;
	if ($table_type == 'content') {
		switch ($field) {
			case "no_hdt" :
				return "c2no_hdt";
			case "type":
				return "c0type";
			case "imam_id":
				return "c1imam_id";
			case "tema":
				return "c3tema";
			case "isi_arab":
				return "c4isi_arab";
			case "isi_indonesia":
				return "c5isi_indonesia";
			case "isi_arab_gundul":
				return "c6isi_arab_gundul";
			case "kitab_imam_id":
				return "c7kitab_imam_id";
			case "bab_imam_id":
				return "c8bab_imam_id";
			default:
				return 1;
		}
	} else {
		return $field;
	}
}


function colorizePerawi($text){
	$text_rep = str_replace('[', '<span class="perawi-color">', $text);
	$text_rep2 = str_replace(']', '</span>', $text_rep);
	return  $text_rep2;
}

function highlightTerms($text_string, $terms) {
	$split_words = explode(" ", $terms);
	//print_r($split_words);exit;
	## We can loop through the array of terms from string
	foreach ($split_words as $term) {
		## use preg_quote
		$term = preg_quote($term);
		## Now we can highlight the terms
		//$text_string = strtolower($text_string);
		$text_string = preg_replace("/($term)/i", '<span class="highlight text-error">\1</span>', $text_string);
	}
	## lastly, return text string with highlighted term in it
	return colorizePerawi($text_string);
}

function query_exec_time($time){
	$_SESSION['query_exec_time'] = $time;
}

function imam_id($imam_slug){
	switch ($imam_slug) {
		case "bukhari" :
			return 1;
		case "muslim" :
			return 2;
		case "abudaud":
			return 3;
		case "tirmidzi":
			return 4;
		case "nasai":
			return 5;
		case "ibnumajah":
			return 6;
		case "ahmad" :
			return 7;
		case "malik":
			return 8;
		case "darimi":
			return 9;
		case "1" :
			return "bukhari";
		case "2" :
			return "muslim";
		case "3":
			return "abudaud";
		case "4":
			return "tirmidzi";
		case "5":
			return "nasai";
		case "6":
			return "ibnumajah";
		case "7" :
			return "ahmad";
		case "8":
			return "malik";
		case "9":
			return "darimi";
		default :
			return "1";
	}
}

function imam_nama($imam_id){
	switch ($imam_id) {
		case "1" :
			return "Bukhari";
		case "2" :
			return "Muslim";
		case "3":
			return "Abu Daud";
		case "4":
			return "Tirmidzi";
		case "5":
			return "Nasa'i";
		case "6":
			return "Ibnu Majah";
		case "7" :
			return "Ahmad";
		case "8":
			return "Malik";
		case "9":
			return "Darimi";
		case "bukhari" :
			return "Bukhari";
		case "muslim" :
			return "Muslim";
		case "abudaud":
			return "Abu Daud";
		case "tirmidzi":
			return "Tirmidzi";
		case "nasai":
			return "Nasa'i";
		case "ibnumajah":
			return "Ibnu Majah";
		case "ahmad" :
			return "Ahmad";
		case "malik":
			return "Malik";
		case "darimi":
			return "Darimi";
		default :
			return "Bukhari";
	}
}
?>
