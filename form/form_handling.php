<?php
$name = $_POST['name'];
$age = $_GET['age'];
// Simplenya get dan post. kalo get data formnya ada di url kalo post itu di hide

var_dump($name);
echo '<br>';
var_dump($age);
echo '<br>';
echo 'REQUEST METHOD is: ' . $_SERVER['REQUEST_METHOD'];
