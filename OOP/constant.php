<?php


class TryAConstant
{
  private const NAME = "Yadi Apriyadi";
  public static int $number = 1;

  public function getName()
  {
    return self::NAME;
  }

  public function setNumber(int $number)
  {
    self::$number = $number;
    return self::$number;
  }
}

echo TryAConstant::$number;
echo "<br />";

$tryConstant = new TryAConstant();
echo $tryConstant->getName();
echo "<br />";
echo $tryConstant->setNumber(1);
