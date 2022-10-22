<?php

require_once "App/init.php";

$comic_naruto = new Comic('Naruto Shippuden', 'Masashi Kimimoto', 'Shueisha', 12000, 20, 20);
$game_roblox = new Game('Roblox', 'robert', 'nerot', 5000, 2, 10);
$info_products = new PrintInfoProduct;
$info_products->addProducts($comic_naruto, $game_roblox);
echo $info_products->print();
echo Comic::DATA;
