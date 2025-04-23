<?php
session_start();
$timeout = 5 * 60;

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout) {
    session_unset();
    session_destroy();
    echo "Сесію завершено через неактивність.";
    echo "<br><a href='login.php'>Увійти знову</a>";
    exit;
}

$_SESSION['last_activity'] = time();
echo "Сесія активна. Час оновлено.";
?>
