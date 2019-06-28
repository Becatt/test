<!DOCTYPE HTML>
<html lang="ru">

  <head>
    <title>6</title>
  </head>

  <body>
    <form method="GET" action="task6.php">
      Введите число
      <input name="x" type="number">
      Ведите цифру для проверки
      <input name="y" type="number">
      <input type="submit" value= "Ок">
    </form>
  </body>
</html>

<?php
  $x = $_GET['x'];
  $y = $_GET['y'];
  $sum = preg_match_all('/'.$y.'/', $x);
  echo "вхождений цифры ${y} в число ${x} - ${sum}" ;
