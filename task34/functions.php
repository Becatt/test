<?php
session_start();

if (stristr($_SERVER['REQUEST_URI'], 'index')) {
  $_SESSION = [];
}

if (!empty($_POST['name'])) {
  $_SESSION['name'] = $_POST['name'];
} else if(!empty($_POST['surname'])) {
  $_SESSION['surname'] = $_POST['surname'];
} else if(!empty($_POST['age'])) {
  $_SESSION['age'] = $_POST['age'];
}
