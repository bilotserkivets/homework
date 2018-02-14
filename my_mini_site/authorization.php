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
    <div class="row">
        <div class="col-3">

<form action ="index.php" method="post">
    <h5>Форма авторизації</h5>
    <div class="form-group">
        <label for="formGroupExampleInput">Login</label>
        <input type="text" name="login" class="form-control" id="formGroupExampleInput" placeholder="Login">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Запам'ятати мене</label>
    </div>
    <button type="submit" class="btn btn-primary">Увійти</button>
</form>
        </div>
    </div>
<?php
include 'footer.php';
?>

