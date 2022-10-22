<?php

class Car
{
  public string $model, $color;
  public int $wheels;
  public static int $fuel;
  public bool $engine;
  private string $madeIn;

  public function __construct(string $model, string $color, int $wheels, int $fuel = 1)
  {
    $this->model = $model;
    $this->color = $color;
    $this->wheels = $wheels;
    self::$fuel = $fuel;
    $this->engine = false;
  }

  public function turnOn(): void
  {
    $this->engine = true;
    echo "<br />";
    echo "This car has been turned on";
  }

  public function turnOff(): void
  {
    $this->engine = false;
    echo "<br />";
    echo "This car has been turned off";
  }

  public function onward(int $km): void
  {
    self::$fuel = (self::$fuel * 60) - $km;

    if ($this->engine === false) {
      echo "<br />";
      echo "The car engine not yet turn on";
    } else if (!abs(self::$fuel)) {
      echo "<br />";
      echo "This car doesnt onward to $km";
    } else {
      echo "<br />";
      echo "This car has been onward to $km, and fuel now is " . self::$fuel . "liter";
    }
  }

  public function getFuel()
  {
    return self::$fuel;
  }

  public function getModel()
  {
    return $this->model;
  }
}

class CarInfo
{
  public function getModelName(Car $car): string
  {
    return $car->model;
  }
}

class MaticCar extends Car
{
  public function __construct(string $model, string $color, int $wheels, int $fuel = 1)
  {
    parent::__construct($model, $color, $wheels, $fuel);
  }
}


$avanza = new Car("Avanza", "red", 4);
$infoAvanza = new CarInfo();
echo "The car name is: " . $infoAvanza->getModelName($avanza);
echo "<br>";
$avanza->turnOn();
$avanza->onward(1);
$avanza->onward(1);
$avanza->turnOff();
$avanza->onward(1);
echo "<br />";
echo $avanza->getFuel();
$kijang = new Car("Kijang", "green", 4);
echo "<br />";
echo $kijang->getFuel();
$kijang->turnOn();
$kijang->onward(1);
echo "{$kijang->getModel()}";
