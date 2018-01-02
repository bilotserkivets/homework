<?php
$name = 'Vitalii';
$age = 37;
echo "Meniy zovyt $name <br/>";
echo "Mne $age let";

if ($age <= 59 && $age >= 18) {
	echo "<br/>Vam eche rabotat i rabotat";
}
elseif ($age > 59) {
	echo '<br/>Vam pora na pensiu';
}
elseif ($age >= 0 && $age <= 17) {
	echo "<br/> Vam eche rano rabotat";
}
?>