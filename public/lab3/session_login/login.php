<?php
session_start();
if (isset($_POST['login']) && $_POST['login'] === 'admin' && $_POST['password'] === '1234') {
    $_SESSION['user'] = 'admin';
    $_SESSION['last_activity'] = time();
    header("Location: welcome.php");
    exit;
}
?>

<form method="POST">
    <input type="text" name="login" placeholder="Логін">
    <input type="password" name="password" placeholder="Пароль">
    <button type="submit">Увійти</button>
</form>
