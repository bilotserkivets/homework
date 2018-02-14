<?php
session_start();
session_set_cookie_params(3600);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Тестовый сайт</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
include 'header.php';
?>
<?php
require_once 'functions.php';

require_once 'header.php';


?>

<h3>Гостьова книга</h3>
<?php
if (isset($_SESSION['login'])) {
    include 'write_message.php';
}
?>
<?php
$badWord = ['сук', 'бля', 'пиз'];
$file = 'comment.txt';
if (isset($_POST['comment'])) {
    addComent(['comment' => $_POST['comment'], 'author' => $_SESSION['login']], $file, $badWord);
}
$allComments = readComments($file);
if ($allComments == true) {
    foreach ($allComments as $comment) {
        echo "<div><br/>" . $comment['comment'] . "<br/>" . "Автор: "  . $comment['author'] . "<br/></div>";
    }
}

function writeComment ($file, array $coments){
    file_put_contents($file, serialize($coments));
}

function readComments ($file) {
    if (file_exists($file)) {
        return unserialize(file_get_contents($file));
    }
    else {
        return [];
    }
}

function addComent ($comment, $file, $badWord) {
    $comments = readComments($file);
    $comments[] = badWords($comment, $badWord);
    writeComment($file, $comments);
}

require_once 'footer.php';
?>

