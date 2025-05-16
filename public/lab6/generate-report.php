<?php

$cacheFile = __DIR__ . '/cache/report.html';
$cacheLifetime = 600; // 10 хвилин

if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheLifetime)) {
    // Беремо з кешу
    readfile($cacheFile);
    exit;
}

// Симуляція довгої генерації
sleep(3);

// Генеруємо звіт
$data = '';
for ($i = 0; $i < 1000; $i++) {
    $name = 'User_' . rand(1, 9999);
    $sum = rand(100, 10000);
    $date = date('Y-m-d', strtotime("-".rand(0, 365)." days"));
    $data .= "<tr><td>$name</td><td>$sum</td><td>$date</td></tr>";
}

$html = "<table border='1'><tr><th>Name</th><th>Sum</th><th>Date</th></tr>$data</table>";

// Запис у кеш
file_put_contents($cacheFile, $html);

echo $html;
