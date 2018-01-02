<?php
$weeks = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Субота', 'Воскресенье'];
	foreach ($weeks as $key => $value) {
		echo ($key == 5 || $key == 6) ? "<strong>{$value}</strong><br/>" : "{$value}<br/>";
			}
	?>