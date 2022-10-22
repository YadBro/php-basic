<?php

// require_once "App/Product/Interfaces/InfoProduct.php";
// require_once "App/Product/Classes/Product.php";
// require_once "App/Product/Classes/Comic.php";
// require_once "App/Product/Classes/Game.php";
// require_once "App/Product/Classes/PrintInfoProduct.php";

function autoload($class)
{
  $classPath = __DIR__ . "/Product/classes";
  $interfacePath = __DIR__ . "/Product/Interfaces";

  $classFile = "$classPath/$class.php";
  $interfaceFile = "$interfacePath/$class.php";

  if (is_file($classFile)) {
    require_once $classFile;
  } else if (is_file($interfaceFile)) {
    require_once $interfaceFile;
  }
}

spl_autoload_register('autoload');
