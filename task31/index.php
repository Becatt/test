<?php

if (!empty($_GET)) {
  $users = preg_split('/\s/', strip_tags($_GET['users']), -1, 1);
}
  var_dump($users);

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'db');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$connect_str = DB_DRIVER . ':host=' . DB_HOST . '; dbname=' . DB_NAME;

$pdo = new PDO($connect_str, DB_USER, DB_PASSWORD);
$values = implode(', ', array_fill(0, count($users), '(?)'));
print_r($values);
$sql = "INSERT INTO users_test (login) VALUES ". $values;
$stmt = $pdo->prepare($sql);

if(!empty($users)) {
  $stmt->execute($users);
}


?>

<!DOCTYPE HTML>
<html lang="ru">

  <head>
    <title>task31</title>
  </head>

  <body>
    <form method="GET" action="index.php">
      Перечислите пользовталей (каждого с новой строки)
      <br>
      <textarea name="users" rows="6"></textarea>
      <br>
      <input type="submit" value= "Ок">
    </form>
  </body>
</html>
