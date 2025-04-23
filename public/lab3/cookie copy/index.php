<?php
if (isset($_POST['username'])) {
    setcookie("username", $_POST['username'], time() + (7 * 24 * 60 * 60));
    header("Location: index.php");
    exit;
}

if (isset($_GET['delete'])) {
    setcookie("username", "", time() - 3600);
    header("Location: index.php");
    exit;
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Введіть ім'я">
    <button type="submit">Зберегти</button>
</form>

<?php
if (isset($_COOKIE['username'])) {
    echo "<p>Привіт, " . htmlspecialchars($_COOKIE['username']) . "!</p>";
    echo '<a href="?delete=true">Видалити cookie</a>';
}
?>
