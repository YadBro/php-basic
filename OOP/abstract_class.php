<?php

declare(strict_types=1);

interface Buah
{
  const DATA = "a";
  public function test();
}

abstract class Product
{
  public string $title, $writer, $publisher;
  public float $price;
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

  abstract function getInfoProduct();

  public function getInfo(): string
  {
    $str = "{$this->title} | {$this->getLabel()} (Rp. {$this->getPrice()})";
    return $str;
  }
}

class Comic extends Product
{
  public int $page;

  public function __construct(string $title, string $writer, string $publisher, int $price, int $page, int $discount = 0)
  {
    parent::__construct($title, $writer, $publisher, $price, $discount);
    $this->page = $page;
  }
  public function getInfoProduct()
  {
    $str = "Comic " . parent::getInfo() . " - $this->page page.";
    return $str;
  }
}

class Game extends Product
{
  public int $hours;

  public function __construct(string $title, string $writer, string $publisher, int $price, int $hours, int $discount = 0)
  {
    parent::__construct($title, $writer, $publisher, $price, $discount);
    $this->hours = $hours;
  }
  public function getInfoProduct()
  {
    $str = "Game " . parent::getInfo() . " ~ $this->hours hours.";
    return $str;
  }
}

class PrintInfoProduct
{
  public array $listOfProducts = [];

  public function addProducts(Product ...$products)
  {
    foreach ($products as $product) {
      array_push($this->listOfProducts, $product);
    }
  }

  public function print()
  {
    $str = "List Of Products <br>";

    foreach ($this->listOfProducts as $product) {
      $str .= "- {$product->getInfoProduct()} <br>";
    }

    return $str;
  }
}

$comic_naruto = new Comic('Naruto Shippuden', 'Masashi Kimimoto', 'Shueisha', 12000, 20, 20);
$game_roblox = new Game('Roblox', 'robert', 'nerot', 5000, 2, 10);
$info_products = new PrintInfoProduct;
$info_products->addProducts($comic_naruto, $game_roblox);
echo $info_products->print();
