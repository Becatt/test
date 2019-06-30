<!DOCTYPE HTML>
<html lang="ru">

  <head>
    <title>task26</title>
  </head>

  <body>
    <form method="GET" action="index.php">
      Введите число
      <input name="x" type="number">
      <input type="submit" value= "Ок">
    </form>
  </body>
</html>

<?php
  $x = (int) $_GET['x'];

function checkDivisor($dividend, $divisor = 2) {
  if (!$dividend) {
    return;
  }

  static $divisors = [];
  static $divisor = 2;

  if($dividend === $divisor) {
    $divisors[] = $divisor;
    return $divisors;
  } else if(($dividend % $divisor) === 0) {
    $dividend /= $divisor;
    $divisors[] = $divisor;
  } else {
    $divisor++;

  }
  return checkDivisor($dividend, $divisor);
}

$check = checkDivisor($x);
var_dump($check);
