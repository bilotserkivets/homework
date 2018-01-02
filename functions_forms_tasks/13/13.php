<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
//print_r(countValues($string));
foreach (countValues($string) as $key => $value) {
    echo "$key - $value</br>";
}
function countValues($string) {
    $string = explode(' ', $string);
    return array_count_values($string);

}