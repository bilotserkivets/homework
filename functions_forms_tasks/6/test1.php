<?php
/*
6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться
в папку gallery и выводиться на странице в виде таблицы.
*/

require_once 'test1.html';

$img = 'img/';

if (isset($_FILES['userfile'])){
    $userfile = $_FILES['userfile']['tmp_name'];
    $userfile_name = $_FILES['userfile']['name'];
    $userfile_size = $_FILES['userfile']['size'];
    $userfile_type = $_FILES['userfile']['type'];
    $error_code = $_FILES['userfile']['error'];
   }

   if ($error_code > 0) {
    echo 'Помилка!';
    $error_mesage = [
        1 => 'Розмір файлу більше допустимого upload_max_filesize в php.ini',
        2 => 'Розмір файлу більше допустимого upload_max_filesize в формі.',
        3 => 'Завантажена тільки частина файлу.',
        4 => 'Файл не був завантажений.',
        6 => 'Не удалось записать файл на диск.',
        7 => 'PHP-расширение остановило загрузку файла.'
    ];
    die($error_mesage[$error_code]);
   }

   function moveFile ($userfile, $dir, $userfile_name){
       if (is_uploaded_file($userfile)) {
           $file_img = $dir.$userfile_name;
           move_uploaded_file($userfile, $file_img);
       }
   }
  moveFile($userfile, $img, $userfile_name);

function gallery ($dir){
    $imgFile = scandir($dir);
    $newimg_file = [];
    for ($i = 0; $i < count($imgFile); $i++) {
        if ($imgFile[$i] !== '.' && $imgFile[$i] !== '..') {
            $newimg_file[] = $imgFile[$i];
        }
    }
    foreach ($newimg_file as $key => $value) {
        $images = $dir.$value;
        echo "<a href='$images'><img src='$images' width='200' height='300' vspace='5' hspace='5'></a>";
        if (($key + 1) % 4 == 0){
            echo "<br/>";
        }
    }
}
gallery ($img);
