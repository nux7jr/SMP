<?php

require __DIR__ . '/src/auth/auth.php';
$login = getUserLogin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="src/style/style.css">
  <title>Catalog</title>
</head>

<body>
  <header>
    <div class="header__logo">
      <img class="header__img" src="/src/img/logonew2.png" alt="Logo">
      <h2 class="header__heading"><a class="nav__link" href="index.php">Welcome</a></h2>
    </div>
    <div class="header__btn burger">
      <button class="nav-toggle">
        <span class="bar-top"></span>
        <span class="bar-mid"></span>
        <span class="bar-bot"></span>
      </button>
    </div>
    <nav>
      <ul class="nav__list">
        <li class="nav__item"><a class="nav__link" href="catalog.php">Каталог</a></li>
        <li class="nav__item"><a class="nav__link" href="about.php">О нас</a></li>
        <li class="nav__item"><a class="nav__link" href="price.php">Цены</a></li>
        <li class="nav__item"><a class="nav__link" href="contacts.php">Контакты</a></li>
        <?php if ($login === null) : ?>
          <li class="nav__item"><a class="nav__link" href="src/auth/login.php">Авторизуйтесь</a></li>
          <li class="nav__item"><a class="nav__link" href="src/auth/register.php">Регистация</a></li>
        <?php else : ?>
          <p class="nav__text">Добро пожаловать, <?= $login ?></p>
          <button class="nav__item btn-logout" onclick="clear()">Выйти</button>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
  <div class="catalog">
    <section>
      <article>
        <h4>
          title article
        </h4>
        <p>Descr</p>
      </article>
      <article>
        <h4>
          title article
        </h4>
        <p>Descr</p>
      </article>
      <article>
        <h4>
          title article
        </h4>
        <p>Descr</p>
      </article>
    </section>
  </div>
</body>
<script src="src/js/script.js"></script>
<script src="src/js/menu.js"></script>
<script src="src/js/slider.js"></script>

</html>