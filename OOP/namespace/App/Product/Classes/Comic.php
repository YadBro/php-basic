<?php

class Comic extends Product implements InfoProduct
{
  public int $page;
  const DATA = "B";

  public function __construct(string $title, string $writer, string $publisher, int $price, int $page, int $discount = 0)
  {
    parent::__construct($title, $writer, $publisher, $price, $discount);
    $this->page = $page;
  }

  public function getInfoProduct(): string
  {
    $str = "Comic " . $this->getInfo() . " - $this->page page.";
    return $str;
  }

  public function getInfo(): string
  {
    $str = "{$this->title} | {$this->getLabel()} (Rp. {$this->getPrice()})";
    return $str;
  }
}
