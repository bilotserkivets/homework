

<?php
/*
* Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
* Реализовать с помощью функции.
*/

include '2.html';
$arr = [];


foreach(explode(' ', $_POST['text']) as $value) {
    $arr[$value] = mb_strlen($value);
    }
    echo implode(' ', (topWords($arr)));


function topWords ($arr){
    arsort($arr);
    return array_keys(array_slice($arr, 0, 3));
}

