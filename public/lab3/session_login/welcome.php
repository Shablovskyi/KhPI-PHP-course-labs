<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
echo "<h2>Вітаємо, " . $_SESSION['user'] . "!</h2>";
?>
<a href="logout.php">Вийти</a>
