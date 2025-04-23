<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: redirect.php");
    exit;
}
?>

<ul>
    <li>IP клієнта: <?= $_SERVER['REMOTE_ADDR'] ?></li>
    <li>Браузер: <?= $_SERVER['HTTP_USER_AGENT'] ?></li>
    <li>Скрипт: <?= $_SERVER['PHP_SELF'] ?></li>
    <li>Метод запиту: <?= $_SERVER['REQUEST_METHOD'] ?></li>
    <li>Фізичний шлях: <?= $_SERVER['SCRIPT_FILENAME'] ?></li>
</ul>
