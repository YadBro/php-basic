<?php
$a = 5;
$b = 2;
$y;

function myTestFunction()
{
  global $a;
  $GLOBALS['y'] = $GLOBALS['a'] + $GLOBALS['b'];
  echo $a;
  echo '<br />';
}

myTestFunction();

echo $y, '<br />';

function myTestFunction2()
{
  static $x = 1;
  echo $x;
  $x++;
}

myTestFunction2();
myTestFunction2();
myTestFunction2();
myTestFunction2();


function defaultValue(string $color = 'green')
{
  echo '<br />';
  echo $color;
}

defaultValue();

// override
defaultValue('red');


function argByReference(int &$num1)
{
  echo '<br />';
  $num1 += 5;
}

$num = 10;
argByReference($num);
echo $num;

// ADVANCE
function returnString(int $num1): int
{
  return $num1;
}

echo '<br />';
var_dump(returnString(4));
