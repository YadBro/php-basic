<?php
$number1 = 1; // integer
$number2 = .5; // float
$number3 = 1.9e411; // infinite
$nan = NAN; // infinite
$nan2 = acos(8); // infinite

$numeric1 = '1';
$non_numeric = '0xf4c3b00c';

$num = 1232.23521;
$float_cast = (float)$num;
$int_cast = (int)$num;
$string_cast = (string)$num;
$int_string_cast = (int)$string_cast;



echo 'max integer in php: ' . PHP_INT_MAX;
echo '<br />';
echo 'min integer in php: ' . PHP_INT_MIN;
echo '<br />';
echo 'size integer in php: ' . PHP_INT_SIZE;

echo '<br />';
// CHECK IF VARIABLE IS INTEGER
var_dump(is_int($number1));
echo '<br />';
var_dump(is_int($number2));

// CHECK IF VARIABLE IS FLOAT
echo '<br />';
var_dump(is_float($number2));
var_dump(is_double($number2));
echo '<br />';
var_dump(is_double($number2));

// CHECK IF VARIABLE IS FLOAT
echo '<br />';
var_dump(is_finite($number3));
var_dump(is_finite(PHP_INT_MAX));
var_dump(is_infinite($number3));
var_dump(is_infinite(PHP_FLOAT_MAX));

// CHECK IF VARIABLE IS NAN
echo '<br />';
echo "$nan is NaN: " . var_dump(is_nan($nan));
echo '<br />';
echo "$nan2 is NaN: " . var_dump(is_nan($nan2));

echo '<br />';
var_dump(is_numeric($numeric1));
echo '<br />';
var_dump(is_numeric($non_numeric));

echo '<br />';
echo var_dump($int_cast);
echo '<br />';
echo var_dump($float_cast);
echo '<br />';
echo var_dump($string_cast);
echo '<br />';
echo var_dump($int_string_cast);
