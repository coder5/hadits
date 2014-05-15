<?php

include_once 'IDNstemmer.php';

$word = "pembunuhan";

$st = new IDNstemmer();

echo "stemming result : ".$st->doStemming($word);

?>