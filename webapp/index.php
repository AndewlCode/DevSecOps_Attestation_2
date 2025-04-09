<?php

echo "<h1>Добро пожаловать на сайт!</h1>";

if (isset($_GET['name'])) {
    echo "Привет, " . $_GET['name'];
}

?>
<a href="login.php">Войти</a>