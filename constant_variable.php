<?php

// NOTES! CONSTANT ARE GLOBAL VARIABLE

// use define keywoard to create a constant variable
// as default constant are case-sensitive
// CONSTANT STRING
define('GREETING', 'Welcome to wkwkland');
echo GREETING;


define('num2', 200);
const num1 = 5;
$num2 = 1;
echo '<br />';
echo num1;

function testGlobal()
{
  global $num2;
  echo '<br />';
  num1 + 7;
  num2 + 1;
  echo num1;
  echo '<br />';
  echo num2;
  echo '<br />';
  echo $num2;
}

testGlobal();

echo '<br />';
define('sayhi', 'Hi Yadi Apriyadi');
echo sayhi;

// CONSTANT ARRAY
echo '<br />';
define('COLORS', ['red', 'green', 'purple', 'tile', 'yellow']);
echo join(', ', COLORS);

// CONSTANT NUMBER
echo '<br />';
define('NUMBERS', 500);
echo NUMBERS;

function myFunction()
{
  echo '<br />';
  echo sayhi;
}

myFunction();
