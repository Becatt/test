<?php
  // $x = $_GET['x'];
  // $y = $_GET['y'];
  // $sum = preg_match_all('/'.$y.'/', $x);
  // echo "вхождений цифры ${y} в число ${x} - ${sum}" ;

function getCount($number, $check) {
  $strNumber = (string)$number;
  $strCheck = (string)$check;
  // вариант 1
  $arrNumber = str_split($strNumber);
  $count = 0;
  foreach ($arrNumber as $el) {
    if($strCheck === $el) {
      $count++;
    }
  }
  return $count;
  // вариант 2
  // return preg_match_all('/'.$strCheck.'/', $strNumber);
}

echo getCount(44555556, 5);
//либо

$sum = preg_match_all('/'.$check.'/', $number);

?>

<!DOCTYPE HTML>
<html lang="ru">

  <head>
    <title>6</title>
  </head>

  <body>
    <form method="GET" action="index.php">
      Введите число
      <input name="x" type="number">
      Ведите цифру для проверки
      <input name="y" type="number">
      <input type="submit" value= "Ок">
    </form>
  </body>
</html>
