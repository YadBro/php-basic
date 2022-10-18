<?php

declare(strict_types=1);

function myFunc(int $num1)
{
  var_dump($num1);
}

myFunc('1'); // error before execute
myFunc(2);
