<?php
session_start();
$name = $_POST['name'];
$_SESSION['name'] = $name;
//$name = $_SESSION['name'];
echo "Привет {$name}!";