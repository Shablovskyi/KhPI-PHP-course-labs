<?php
  $uploadDir = 'uploads/';
  //Перевіряємо чи існує каталог uploads
  if (!file_exists($uploadDir)){
    echo ("Каталог не існує! \n");
  }
  //Отримуємо список файлів у каталозі uploads
  $files = scandir($uploadDir);
  $files = array_diff($files, ['.', '..']);

  //Чи є файли у каталозі
  if (empty($files)){
    echo 'Файлів немає!';
  }else{
    //Виведемо список файлів у каталозі uploads
    echo "<h2>Список файлів: </h2>";
    echo "<ul>";
    foreach($files as $file){
      //Створюємо посилання для завантаження файлу
      echo "<li><a href='$uploadDir$file' download>$file</a></li>";
    }
    echo"</ul>";
  }
?>