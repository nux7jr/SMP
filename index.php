<?php

require __DIR__ . '/src/auth/auth.php';
$login = getUserLogin();

?>
<html>

<head>
    <title>Главная страница</title>
    <link rel="stylesheet" href="src/style/style.css">
</head>

<body>
    <header>
        Welcome
    </header>
    <?php if ($login === null) : ?>
        <a href="src/auth/login.php">Авторизуйтесь</a>
        <a href="src/auth/register.php">Регистация</a>
    <?php else : ?>
        Добро пожаловать, <?= $login ?>
        <br>
        <button class="btn-logout">Выйти</button>
    <?php endif; ?>
</body>
<script src="src/js/script.js"></script>

</html>