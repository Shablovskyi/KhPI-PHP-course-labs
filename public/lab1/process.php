<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : "";
  $surname = isset($_POST["surname"]) ? htmlspecialchars($_POST["surname"]) : "";
  
  if($name==false || $surname==false){
    echo "Введіть ім'я та прізвище" . "<br>";
    echo"<a href='index.html'>На головну>";
  }else {
    echo "<h1>Вітаю $name $surname!</h1>";
  }

}

