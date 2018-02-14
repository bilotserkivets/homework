<?php
require_once 'functions.php';
if(isset($_POST['login']) && isset($_POST['password']) !== false) {
    $login = $_POST['login'];
    $users = 'users.txt';

    $user_login  = unserialize(file_get_contents($users));
    if ($user_login == false) {
        $user_login  = [];
    }
    foreach  ($user_login as $key){
        if ($key['login'] === $_POST['login'] && $key['password'] === $_POST['password']){
            $authorization = true;
        }
        else {
            $authorization = false;

        }
    }
}
if ( isset($authorization) == true){
    $_SESSION['login'] = $login;
}
//header('Location: index.php');
//exit;
/*else {
    echo "Ви не Зареестровані. <a href ='registration.php'>Зареєструйтесь!</a>";
}
*/
//require_once 'index.php';