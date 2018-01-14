<?php
session_start();

echo "Вы посещали: <br/>";
foreach ($_SESSION as $key => $value){
    echo "$key<br/>";
}
