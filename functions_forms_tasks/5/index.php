<?php
/*
5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
Директория и искомое слово задаются как параметры функции.
*/

$dir = 'files/';
$work = 'test';
function listFiles ($dir, $work) {
    $files = scandir($dir);
    foreach ($files as $value) {
        if ($value !== '.' && $value !== '..')
            if (strpos($value, $work) !== false) {
                echo "$value<br/>";
            }
    }
}

listFiles ($dir, $work);