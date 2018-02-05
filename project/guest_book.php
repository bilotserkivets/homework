<?php
session_start();
if (isset($_SESSION['login'])) {
    echo "Привіт " . $_SESSION['login'];
}
?>

<h3>Гостьова книга</h3>
<?php
if (isset($_SESSION['login'])) {
    include 'write_message.php';
}
?>
<?php

$file = 'comment.txt';
if (isset($_POST['comment'])) {
    addComent(['comment' => $_POST['comment'], 'author' => $_SESSION['login']], $file);
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

function addComent ($comment, $file) {
    $comments = readComments($file);
    $comments[] = $comment;
    writeComment($file, $comments);

}

include 'footer.php';
?>

