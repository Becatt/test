<?php

function myImplode(string $glue1, string $glue2, array $pieces, $order = null) {
  $result = '';
  foreach ($pieces as $key => $value) {
    if($order && $order === 'reverse') {
      $result .= end($pieces) === $value ? $value . $glue1 . $key : $value . $glue1 . $key . $glue2 . ' ';
    } else {
      $result .= end($pieces) === $value ? $key . $glue1 . $value : $key . $glue1 . $value . $glue2 . ' ';
      }

  }
  return $result;
}

$arr = array('a'=>1, 'b'=> 2, 'c'=>3);

echo(myImplode(':', ', ', $arr)); //вернет a:1, b:2, c:3
echo("\n");
echo(myImplode(':', ', ', $arr, 'reverse')); //вернет 1:a, 2:b, 3:c
