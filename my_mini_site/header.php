<?php
require_once 'functions.php';

$loginFile = 'users.txt';
echo "<pre>";
print_r(authorization ($_POST['login'], $_POST['password'], $loginFile));
echo "</pre>";

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Головна</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="guest_book.php">Гостьова книга<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="authorization.php">Авторизація</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registration.php">Реєстрація</a>
            </li>
        </ul>
    </div>
</nav>
