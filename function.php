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
