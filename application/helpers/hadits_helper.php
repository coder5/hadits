<?php

function highlightTerms($text_string, $terms) {
	$split_words = explode(" ", $terms);
	//print_r($split_words);exit;
	## We can loop through the array of terms from string
	foreach ($split_words as $term) {
		## use preg_quote
		$term = preg_quote($term);
		## Now we can highlight the terms
		//$text_string = strtolower($text_string);
		$text_string = preg_replace("/($term)/i", '<span class="highlight">\1</span>', $text_string);
	}
	## lastly, return text string with highlighted term in it
	return $text_string;
}

function query_exec_time($time){
	$_SESSION['query_exec_time'] = $time;
}

function imam_id($imam_slug){
	switch ($imam_slug) {
		case "bukhari" :
			return "2";
		case "muslim" :
			return "3";
		case "ahmad" :
			return "1";
		case "abudaud":
			return "4";
		case "tirmidzi":
			return "5";
		case "nasai":
			return "6";
		case "ibnumajah":
			return "7";
		case "malik":
			return "8";
		case "darimi":
			return "9";
		default :
			return "bukhari";
	}
}

function imam_nama($imam_id){
	switch ($imam_id) {
		case "2" :
			return "bukhari";
		case "3" :
			return "muslim";
		case "1" :
			return "ahmad";
		case "4":
			return "abudaud";
		case "5":
			return "tirmidzi";
		case "6":
			return "nasai";
		case "7":
			return "ibnumajah";
		case "8":
			return "malik";
		case "9":
			return "darimi";
		default :
			return "bukhari";
	}
}
?>
