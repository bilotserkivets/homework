<?php
/*
7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
Все добавленные комментарии выводятся над текстовым полем.
*/

$file = 'comment.txt';

if (isset($_POST['comment'])) {
    addComment (['comment' => $_POST['comment']], $file);
}


$allComments = readComments ($file);
if ($allComments == true) {
foreach ($allComments as $comment) {
    echo "<div>" . $comment['comment'] . "</div>";
}
}
function readComments ($file) {
    if (file_exists($file)) {
        return unserialize(file_get_contents($file));
    }
    else {
        return [];
    }
}

function addComment ($comment, $file) {
    $comments = readComments ($file);
    $comments[] = $comment;
    writeComment ($file, $comments);
}


function writeComment ($file, array $comments){
    file_put_contents($file, serialize($comments));
}

    require_once 'index.html';
