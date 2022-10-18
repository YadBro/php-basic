<?php 
print '<br />';
print 'The result are ' . $y;
echo '<br />';

$string = 'Halo Mamang';
$integer = 5;
$float = 0.5;
$boolean = false || true;
$array = array('Andri', 'Subekti', ' Yadi');
$object = [
  'name' => 'asiap',
  'age' => 5,
];

class Car
{
  public
    $color,
    $model,
    $year;

  public function __construct(string $color, string $model, int $year)
  {
    $this->color = $color;
    $this->model = $model;
    $this->year = $year;
  }

  public function printColor()
  {
    echo '<br />', $this->color;
  }
}

var_dump($string);
echo '<br />';
var_dump($integer);
echo '<br />';
var_dump($float);
echo '<br />';
var_dump($boolean);
echo '<br />';
var_dump($array);
echo '<br />';
var_dump($object['name']);
echo '<br />';
var_dump(new Car('red', 'tesla', 2022));

$tesla = new Car('green', 'tesla', 2010);
$tesla->printColor();
