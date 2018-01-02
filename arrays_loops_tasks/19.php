<?php
$week = [1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда', 4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота', 7 => 'Воскресенье'];
	$day = $week[date('N')];
	foreach ($week as $value) {
		echo ($day == $value) ? "<em>{$value}</em><br/>" : "{$value}<br/>";
			}
	?>	