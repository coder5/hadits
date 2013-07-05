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

?>
