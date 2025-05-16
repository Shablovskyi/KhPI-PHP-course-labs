<?php
session_start();

if (isset($_SESSION['cached_data']) && isset($_SESSION['cached_time'])) {
    $age = time() - $_SESSION['cached_time'];
    if ($age < 600) { // 10 хвилин
        $data = $_SESSION['cached_data'];
        $source = 'з кешу сесії';
    } else {
        $data = generateData();
        $_SESSION['cached_data'] = $data;
        $_SESSION['cached_time'] = time();
        $source = 'оновлено кеш';
    }
} else {
    $data = generateData();
    $_SESSION['cached_data'] = $data;
    $_SESSION['cached_time'] = time();
    $source = 'створено новий кеш';
}

function generateData() {
    sleep(2); // Симуляція навантаження
    return [
        'usd' => rand(35, 40),
        'eur' => rand(38, 43)
    ];
}

echo "<p>Дані: " . json_encode($data) . "</p>";
echo "<p>Джерело: $source</p>";
?>
