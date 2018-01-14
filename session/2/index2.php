<?php
session_start();
$page2 = $_SERVER['REQUEST_URI'];
$_SESSION['page2'] = $page2;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Мой сайт</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Вы находитесь на странице 2</h2>

<p>Перейти на <a href="index.php">Страницу 1</a></p>
<p>Перейти на <a href="index3.php">Страницу 3</a></p>
<p>Перейти на <a href="index4.php">Страницу 4</a></p>
</body>
</html>
