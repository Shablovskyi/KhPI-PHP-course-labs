<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if (!isset($_SESSION['pending_cookie'])) {
    $_SESSION['pending_cookie'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item']) && !empty($_POST['item'])) {
    $item = trim($_POST['item']);
    $_SESSION['cart'][] = $item;
    $_SESSION['pending_cookie'][] = $item;

    header("Location: cart.php");
    exit;
}

if (!empty($_SESSION['pending_cookie'])) {
    $previous = isset($_COOKIE['history']) ? explode(',', $_COOKIE['history']) : [];
    $merged = array_merge($previous, $_SESSION['pending_cookie']);
    $unique = array_unique($merged);
    setcookie('history', implode(',', $unique), time() + (30 * 24 * 60 * 60));
    unset($_SESSION['pending_cookie']);
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
</head>
<body>
    <h1>Корзина покупок</h1>

    <form method="POST" action="cart.php">
        <input name="item" placeholder="Назва товару" required>
        <button type="submit">Додати в корзину</button>
    </form>

    <h2>Поточна корзина:</h2>
    <ul>
        <?php
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo "<li>" . htmlspecialchars($item) . "</li>";
            }
        } else {
            echo "<li>Корзина порожня</li>";
        }
        ?>
    </ul>

    <h2>Попередні покупки (з cookie):</h2>
    <ul>
        <?php
        if (isset($_COOKIE['history'])) {
            foreach (explode(',', $_COOKIE['history']) as $item) {
                echo "<li>" . htmlspecialchars($item) . "</li>";
            }
        } else {
            echo "<li>Немає збережених покупок</li>";
        }
        ?>
    </ul>
</body>
</html>
