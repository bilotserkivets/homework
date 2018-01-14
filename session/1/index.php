<?php
/*
 Сделайте две страницы: index.php и hello.php. При заходе на index.php спросите с помощью формы имя пользователя,
запишите его в сессию. При заходе на hello.php поприветствуйте пользователя фразой "Привет, %Имя%!".
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Мой сайт</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="hello.php" method="post">
    <p>Введите Ваше имя. </p><input type="text" name="name">
    <input type="submit" value="Отправить">

</form>
</body>
</html>



