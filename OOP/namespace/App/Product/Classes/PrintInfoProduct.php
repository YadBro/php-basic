<?php

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
