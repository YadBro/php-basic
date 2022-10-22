<?php

class Game extends Product implements InfoProduct
{
  public int $hours;

  public function __construct(string $title, string $writer, string $publisher, int $price, int $hours, int $discount = 0)
  {
    parent::__construct($title, $writer, $publisher, $price, $discount);
    $this->hours = $hours;
  }

  public function getInfoProduct(): string
  {
    $str = "Game " . $this->getInfo() . " ~ $this->hours hours.";
    return $str;
  }

  public function getInfo(): string
  {
    $str = "{$this->title} | {$this->getLabel()} (Rp. {$this->getPrice()})";
    return $str;
  }
}
