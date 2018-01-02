<?php
$a = [26, 17, 136, 12, 79, 15];
$result = 0;
foreach($a as $value) {
	$result = $result + ($value * $value);
}
echo $result;
?>