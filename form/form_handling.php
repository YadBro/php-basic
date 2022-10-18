<?php
// Simplenya get dan post. kalo get data formnya ada di url kalo post itu di hide


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name']); // htmlspecialchars menghindari script html aneh yang merusak website kita
  var_dump($name);
  echo 'REQUEST METHOD is: ' . $_SERVER['REQUEST_METHOD'];
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $age = $_GET['age']; // htmlspecialchars menghindari script html aneh yang merusak website kita
  var_dump($age);
  echo 'REQUEST METHOD is: ' . $_SERVER['REQUEST_METHOD'];
}
