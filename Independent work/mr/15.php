<?php
/*
15. Операции с массивами
Создайте 2 массива с целыми числами: по 5 и 7 элементов соответственно.
Объедините 2 массива в 1.
Выведите все чётные числа из получившегося массива.
*/
$arr_1= [2, 5, 10, 56, 12,];
$arr_2= [4, 6, 43, 53, 17, 45, 86];
$arr = array_merge($arr_1, $arr_2);
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 != 0) {
        echo "$arr[$i], ";
    }
}