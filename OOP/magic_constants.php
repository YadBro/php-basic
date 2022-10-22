<?php

namespace Enemy;

echo __LINE__;
echo "<br />";
echo __FILE__;
echo "<br />";
echo __DIR__;
echo "<br />";
function test()
{
  echo __FUNCTION__;
}

test();
echo "<br />";

class ROOM1
{
  use Mahkluk;
  public function __construct()
  {
    echo __CLASS__;
  }

  public function classMethod()
  {
    echo __METHOD__;
  }
}

trait Mahkluk
{
  function printTrait()
  {
    echo "The trait is " . __TRAIT__;
    echo "<br />";
  }
  function printMethodTrait()
  {
    echo "The method trait is " . __METHOD__;
    echo "<br />";
  }
}

$room1 = new ROOM1;
echo "<br />";
$room1->printTrait();
$room1->printMethodTrait();
$room1->classMethod();
echo "<br />";
echo __NAMESPACE__;
