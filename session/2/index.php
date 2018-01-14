<?php
session_start();
$page1 = $_SERVER['REQUEST_URI'];
$_SESSION['page1'] = $page1;
/*
Создать сайт из четырех страниц. На четвертой странице пользователь видит список страниц, которые он посещал.
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Мой сайт</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Вы находитесь на странице 1</h2>

<p>Перейти на <a href="index2.php">Страницу 2</a></p>
<p>Перейти на <a href="index3.php">Страницу 3</a></p>
<p>Перейти на <a href="index4.php">Страницу 4</a></p>
</body>
</html>




