<?php

function authorization ($userLogin, $password, $loginFile)
{
    if (isset($userLogin) && isset($password)) {
        $users_login = unserialize(file_get_contents($loginFile));
        if ($users_login == false) {
            $users_login = [];
        }

        foreach ($users_login as $value) {
            if ($value['login'] === $userLogin && $value['password'] === md5($password)) {
                $_SESSION['login'] = $value['login'];
            }
            else {
               echo "Не вірний логін або пароль!";
            }
        }
    }
    if (isset($_SESSION['login'])) {
        echo "Привіт " . $_SESSION['login'];
        echo "<br/><a href='disc.php'>Вийти</a> ";
    }
   }

function writeUser($login, $password, $usersFile)
{
    if (isset($login) && isset($password)) {
        $array = ['login' => $login, 'password' => md5($password)];
        $readFile = unserialize(file_get_contents($usersFile));
        $readFile[] = $array;
        file_put_contents($usersFile, serialize($readFile));
}
}

function badWords($message, $badWord)
{
foreach($message as $key => $value){
    $message[$key] = strip_tags(str_replace($badWord, '*****', $value));
}
return $message;
}