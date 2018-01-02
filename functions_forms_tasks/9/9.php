<?php
include '9.html';
if (isset($_POST['text'])) {
    echo reverse ($_POST['text']);
}
function reverse ($string) {
    return strrev($string);
}