<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(isset($_FILES['file'])){
    $file = $_FILES['file'];

    $file_name = $file['name'];
    $file_type = $file['type'];
    $file_size = $file['size'] / 1024; 
    $file_tmp = $file['tmp_name'];

    $allowedType = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4'];

    $uploadDir = 'uploads/';

    //Перевірка чи існує папка uploads
    if (!file_exists($uploadDir)) {
      mkdir($uploadDir, 0777, true);
    }

    //Перевірка чи завантажено файл
    if(is_uploaded_file($file_tmp)){
      if(in_array($file_type, $allowedType) and ($file_size / 1024) < 2){
        $filePath = $uploadDir . $file_name;
        //Перевірка чи існує файл з такою назвою
        if(file_exists($filePath)){
          echo "Файл з назвою " . $file_name . " вже існує в папці " . $uploadDir . "<br>";
          $file_name = time() . "_" . $file_name;
          $filePath = $uploadDir . $file_name;
          //Завантаження файлу якщо він вже існує
          if(move_uploaded_file($file_tmp, $filePath)){
            echo "Ім'я файлу: " . $file_name . "<br>";
            echo "Тип файлу: " . $file_type . "<br>";
            echo "Розмір файлу: " . $file_size . " КБ.<br>";
            echo "Файл $file_name завантажено успішно! <br>";
            // Cтворення посилання для завантаження файлу
            echo "<a href=$filePath download>Завантажити файл</a>";
          }else{
              echo "Не вдалося завантажити файл $file_name! <br>";
          };
        }else{
          //Завантаження файлу якщо він не існує
          if(move_uploaded_file($file_tmp, $filePath)){
            echo "Ім'я файлу: " . $file_name . "<br>";
            echo "Тип файлу: " . $file_type . "<br>";
            echo "Розмір файлу: " . $file_size . " КБ.<br>";
            echo "Файл $file_name завантажено успішно! <br>";
            // Cтворення посилання для завантаження файлу
            echo "<a href=$filePath download>Завантажити файл</a>";
          }else{
              echo "Не вдалося завантажити файл $file_name! <br>";
          };
        }


      }else{
        echo "Файл $file_name не завантажено! <br>";
        //Перевірка типу файлу
        if(!in_array($file_type, $allowedType)){
          echo "Невірний тип файлу! <br>";
        }else{
          echo "Файл повинен бути менший 2МВ! <br>";
        }
      }
  }else{
    echo "Файл $file_name не завантажено! <br>";
  }
  }
}
