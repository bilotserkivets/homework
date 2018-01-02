<?php
/*Написать скрипт для загрузки пользовательских файлов. При загрузке, в зависимости от типа файла – он на сервере должен помещаться в папку /doc, или /img..etc
Должно быть ограничение на прием файлов – не более 2 мб.
Ссылку на форму загрузки разместить на главной странице сайта.
После добавления файлов, при заходе на главную, пользователь должен видеть галерею ранее загруженных картинок, и список загруженных документов (все, что не картинки).
Код максимально писать функциями.
*/

include 'index.html';

// Визначаємо директорії для зберігання файлів
$img = 'img/';
$doc = 'doc/';

if (isset($_FILES['userfile'])) {
    $userfile = $_FILES['userfile']['tmp_name'];
    $userfile_name = $_FILES['userfile']['name'];
    $userfile_type = $_FILES['userfile']['type'];
    $userfile_size = $_FILES['userfile']['size'];
    $error_code = $_FILES['userfile']['error'];
}

if ($error_code > 0) {
    echo 'Помилка:';

    $error_message = [
        1 => 'Розмір файлу більше допустимого upload_max_filesize в php.ini',
        2 => 'Розмір файлу більше допустимого upload_max_filesize в формі.',
        3 => 'Завантажена тільки частина файлу.',
        4 => 'Файл не був завантажений.',
        6 => 'Не удалось записать файл на диск.',
        7 => 'PHP-расширение остановило загрузку файла.'
    ];
    die($error_message[$error_code]);

}
// Порівнюємо отримані паратетри файлу
function comparison ($userfile, $userfile_type, $userfile_size){
    if (is_uploaded_file($userfile) && ($userfile_type == 'application/msword' || $userfile_type == 'image/jpeg') && ($userfile_size < 2000*1024)){
        echo 'Файл успішно завантажено.';
    }
    elseif ($userfile_size > 2000*1024) {
        echo 'Об\'єм файлу більше 2Мб! Зменшіть об\'ем файлу і повторіть спробу.';
    }
    elseif (is_uploaded_file($userfile) && ($userfile_type !== 'application/msword' || $userfile_type !== 'image/jpeg')) {
        echo 'Не допустимий формат файлу. Виберіть файл в форматі jpeg або doc.';
    }
}

comparison ($userfile, $userfile_type, $userfile_size);

// Переміщуємо файл  в залежності від розширення у визначену директорію
function move($userfile_type, $userfile_name, $img, $doc, $userfile ){
    if ($userfile_type == 'image/jpeg') {
        $userfile_img = $img . $userfile_name;
        move_uploaded_file($userfile, $userfile_img);
    } elseif ($userfile_type == 'application/msword') {
        $userfile_doc = $doc . $userfile_name;
        move_uploaded_file($userfile, $userfile_doc);
    }
}

move($userfile_type, $userfile_name, $img, $doc, $userfile );


function exces ($files) {
    $result = array();
    for ($i = 0; $i < count($files); $i++) {
        if ($files[$i] != "." && $files[$i] != "..") {
            $result[] = $files[$i];
        }
    }
    return $result;
}

$gallery = scandir($img);
$gallery = exces($gallery);
$document = scandir($doc);
$document = exces($document);

echo "<h2>Галерея:</h2>";
for ($i = 0; $i < count($gallery); $i++) {
    $path = $img . $gallery[$i];
    echo "<a href='$path'/>";

    echo "<img width=100 height=200 hspace=5 vspace=5 src='$path'/>";
    if (($i + 1) % 6 == 0){
        echo "<br/>";

    }
    echo "</a>";
}

echo "<h2>Завантажені файли:</h2>";
for ($i = 0; $i < count($document); $i++) {
    echo "$document[$i]<br/> ";
}