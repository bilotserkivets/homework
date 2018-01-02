<?php
include '10.html';
if (isset($_POST['text'])) {
    foreach (uniqueWords($_POST['text']) as $value) {
         echo "$value<br/>";
}
}
    function uniqueWords ($words) {
        $words = explode(' ', $words);
        return(array_unique($words));
}