<?php
/*
4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
*/
$dir = 'files/';
function listFiles ($dir) {
    $files = scandir($dir);
    foreach ($files as $value) {
        if ($value !== '.' && $value !== '..')
        echo "$value<br/>";
    }
}

listFiles ($dir);