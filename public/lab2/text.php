<?php 
  $logFile = "log.txt";
  // Перевіряємо, чи була відправлена форма з текстом
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['text'])){
    //Додавання тексту до лога
    file_put_contents($logFile, $_POST['text'] . "\n", FILE_APPEND);
  }
  // Виведення збереженого тексту на екран
  echo "<h2>Збережений текст: </h2>";
  // Виведення тексту з лога
  echo nl2br(file_get_contents($logFile));
?> 
