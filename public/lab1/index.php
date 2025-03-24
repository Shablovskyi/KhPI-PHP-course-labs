<?php //початок роботи з PHP
echo"Завдання 1 вивід строки\n";

echo "Hello world! \n";//Виводить на екран напис "Hello world!"

//Завдання 2 змінні
echo"Завдання 2 змінні\n";

$integer = 20;//Задаємо змінну цілого типу
$string = "Hello!";//Задаємо змінну рядкового типу
$float = 20.5;//Задаємо змінну з плаваючою точкою
$boolean = TRUE;//Задаємо змінну булевого типу

echo "$integer \n";//Виводимо змінну цілого типу на екран
echo "$string\n";//Виводимо змінну рядкового типу на екран
echo "$float\n";//Виводимо змінну з плаваючою точкою на екран
echo "$boolean\n";//Виводимо змінну булевого типу на екран

//Виводимо типи змінних
var_dump($integer);
var_dump($string);
var_dump($float);
var_dump($boolean);

//Завдання 3 конкатенація
echo"Завдання 3 конкатенація\n";

$hello = "Hello";
$world = "world!\n";

$helloworld = "$hello $world";//Конкатенація рядків

echo $helloworld;

//Завдання 4 Умовні конструкції
echo"Завдання 4 Умовні конструкції\n";

$num = 4;

if($num % 2 === 0){ //Умова для парних чисел
  echo "Парне\n";
}else{ //Якщо умова не виконується 
  echo "Непарне\n";
}

//Завдання 5 Цикли
echo"Завдання 5 Цикли\n";

echo"Циклі for\n";

for ($i = 1; $i <= 10; $i++){
  echo "$i\n";
}

echo"Цикл while\n";

$index = 10;

while($index <= 10){
  echo "$index\n";
  $index--;
  if($index === 0){
    break;
  }
}

//Завдання 6 Масиви
echo"Завдання 6 Масиви\n";

$student['name'] = "Illia";
$student['surname']= "Shablovskyi";
$student['age'] = 18;
$student['special'] = "IT";

echo $student['name'] . "\n";
echo $student['surname'] . "\n";
echo $student['age'] . "\n";
echo $student['special'] . "\n";

$student['gpa'] = "some GPA";

print_r($student);

?>
