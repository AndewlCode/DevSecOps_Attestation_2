<?php

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

$file = $_GET['file'] ?? 'welcome.txt';
$content = file_get_contents($file);
echo "<h2>Содержимое файла:</h2>";
echo nl2br(htmlspecialchars($content));
?>

<a href="logout.php">Выйти</a>