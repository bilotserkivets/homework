<?php
session_start();
$page3 = $_SERVER['REQUEST_URI'];
$_SESSION['page3'] = $page3;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Мой сайт</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Вы находитесь на странице 3</h2>

<p>Перейти на <a href="index.php">Страницу 1</a></p>
<p>Перейти на <a href="index2.php">Страницу 2</a></p>
<p>Перейти на <a href="index4.php">Страницу 4</a></p>
</body>
</html>
