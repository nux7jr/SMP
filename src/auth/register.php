<?php
if (!empty($_POST)) {
  require __DIR__ . '/auth.php';
  require __DIR__ . "../db/regUsers.php";

  $login = $_POST['login'] ?? '';
  $password = $_POST['password'] ?? '';

  if (checkAuth($login, $password)) {
    setcookie('login', $login, 0, '/');
    setcookie('password', $password, 0, '/');
    header('Location: /index.php');
  } else {
    $error = 'Ошибка регистации';
  }
}
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <title>Форма регистации</title>
</head>

<body>
  <div class="authForm">
    <h3>Форма регистации</h3>
    <?php if (isset($error)) : ?>
      <h4 class="error__mess">
        <?= $error ?>
      </h4>
    <?php endif; ?>
    <form action="register.php" method="post">
      <div class="form__item">
        <input class="form__input" type="text" name="name" id="name" placeholder="Ваше имя" max="0">
      </div>
      <div class="form__item">
        <input class="form__input" type="text" name="login" id="login" placeholder="Логин">
      </div>
      <div class="form__item">
        <input class="form__input" type="password" name="password" id="password" placeholder="Пароль">
      </div>
      <input class="form__btn" type="submit" value="Зарегистрироваться">
    </form>
  </div>
</body>
<style>
  body {
    display: flex;
    justify-content: center;
    font-family: 'Roboto', sans-serif;
  }

  .authForm {
    margin: auto;
    background-color: #BEBEBE;

    width: 300px;
    height: 500px;

    border-radius: 30px;

    text-align: center;
  }

  .form__input {
    padding: 10px;
    border-radius: 5px;
  }

  .form__item {
    margin-top: 10px;
    margin-bottom: 10px;
  }

  form {
    margin-top: 100px;
  }

  .form__btn {
    padding: 10px;
    border-radius: 5px;
  }

  .error_mess {
    margin: 20px auto;
  }
</style>

</html>