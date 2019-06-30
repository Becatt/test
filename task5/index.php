<!DOCTYPE HTML>
<html lang="ru">

  <head>
    <title>task5</title>
  </head>

  <body>
    <form method= "GET" action="index.php">
      Введите число
      <input name="x" type="text">
      <input type="submit" value= "Ок">
    </form>
  </body>
</html>

<?php
  $x = $_GET['x'];
  if(!(preg_match('/[^0-9]/', $x))) {
    $sum = array_sum(str_split($x));
    echo $sum;
   }
