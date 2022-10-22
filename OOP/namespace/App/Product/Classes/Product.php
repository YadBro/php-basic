<?php

abstract class Product
{
  protected string $title, $writer, $publisher;
  protected float $price;
  protected int $discount;

  public function __construct(string $title, string $writer, string $publisher, int $price, int $discount = 0)
  {
    $this->title = $title;
    $this->writer = $writer;
    $this->publisher = $publisher;
    $this->price = $price;
    $this->discount = $discount;
  }

  public function getPrice()
  {
    return $this->price -= ($this->discount / 100) * $this->price;
  }

  public function getLabel()
  {
    return "$this->writer, $this->publisher";
  }

  abstract public function getInfo(): string;
}
