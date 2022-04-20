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
  <title>Форма регистации</title>
</head>

<body>

  <?php if (isset($error)) : ?>
    <span style="color: red;">
      <?= $error ?>
    </span>
  <?php endif; ?>

  <form action="../db/userBD.php" method="post">
    <label for="login">Имя пользователя: </label><input type="text" name="login" id="login">
    <br>
    <label for="password">Пароль: </label><input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Войти">
  </form>
</body>

</html>