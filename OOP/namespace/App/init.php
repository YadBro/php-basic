<?php

// require_once "App/Product/Interfaces/InfoProduct.php";
// require_once "App/Product/Classes/Product.php";
// require_once "App/Product/Classes/Comic.php";
// require_once "App/Product/Classes/Game.php";
// require_once "App/Product/Classes/PrintInfoProduct.php";

function autoload($class)
{
  $classPath = __DIR__ . "/Product/Classes";
  $interfacePath = __DIR__ . "/Product/Interfaces";
  $servicePath = __DIR__ . "/Product/Services";

  $class = explode('\\', $class);
  $class = end($class);


  $classFile = "$classPath/$class.php";
  $interfaceFile = "$interfacePath/$class.php";
  $serviceFile = "$servicePath/$class.php";


  if (is_file($classFile)) {
    require_once $classFile;
  }

  if (is_file($interfaceFile)) {
    require_once $interfaceFile;
  }

  if (is_file($serviceFile)) {
    require_once $serviceFile;
  }
}

spl_autoload_register('autoload');
