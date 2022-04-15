<?php

require __DIR__ . '/auth.php';
$login = getUserLogin();

?>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Главная страница</title>
</head>

<body>
    <header>
        Some auth
    </header>
    <?php if ($login === null) : ?>
        <a href="/login.php">Авторизуйтесь</a>
    <?php else : ?>
        Добро пожаловать, <?= $login ?>
        <br>
        <button class="btn-logOut">Выйти</button>
    <?php endif; ?>
</body>
<script src="script.js"></script>

</html>