<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    if ($query) {
        $_SESSION['logged_in'] = true;
        header("Location: admin.php");
        exit();
    } else {
        echo "Неверное имя пользователя или пароль!";
    }
}
?>

<form method="POST" action="">
    <label for="username">Имя пользователя:</label>
    <input type="text" name="username" required><br>
    <label for="password">Пароль:</label>
    <input type="password" name="password" required><br>
    <button type="submit">Войти</button>
</form>