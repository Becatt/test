<?php
require_once(__DIR__ . '/functions.php');
?>

<!DOCTYPE HTML>
<html lang="ru">

  <head>
    <title>task34</title>
  </head>

  <body>
    <p>Имя: <?php echo $_SESSION['name'] ?></p>
    <p>Фамимлия: <?php echo $_SESSION['surname'] ?></p>
    <p>Возраст: <?php echo $_SESSION['age'] ?></p>
    <a href="index.php">В начало</a>
  </body>
</html>
