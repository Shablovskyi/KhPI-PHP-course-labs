<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login_form.html");
    exit();
}
echo "Welcome, " . htmlspecialchars($_SESSION['user']) . "!<br>";
echo "<a href='logout.php'>Logout</a>";
?>
