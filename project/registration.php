<?php
$users = 'users.txt';
if (isset($_POST)) {
    $array = ['login' => $_POST['login'], 'password' => $_POST['password']];
    $readFile = unserialize(file_get_contents($users));
    $readFile[] = $array;
    file_put_contents($users, serialize($readFile));

}
include 'index.php';

