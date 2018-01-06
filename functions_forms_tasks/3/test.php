<?php
/*
3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать
через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
*/
require_once 'test.html';

if (isset($_POST['text']) && isset($_POST['n']) && !empty($_POST['text']) && !empty($_POST['n'])) {
    $n = $_POST['n'];
    $text = $_POST['text'];
    $arr = explode(' ', $text);
    //print_r($arr);
    $arr_2 = [];
    foreach ($arr as $value) {
        if (mb_strlen($value) <= mb_strlen(mb_strimwidth($value, 0, $n))) {
            $arr_2[] = $value;
        }
    }
//print_r($arr_2);
    $new_string = implode(' ', $arr_2);
    echo "Слова с длиной слова до {$n} букв: {$new_string}";
}
else {
    echo 'Заполните все поля!';
}

