<?php

class ContohStatic
{
  public static int $number = 1;

  public function hello()
  {
    return "Hello " . self::$number++;
  }
}

$contoh1 = new ContohStatic;
echo $contoh1->hello() . "<br />";
echo $contoh1->hello() . "<br />";

$contoh2 = new ContohStatic;
echo $contoh2->hello() . "<br />";
echo $contoh2->hello() . "<br />";
