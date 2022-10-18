<?php

$num1 = array(0, 150, 30, 20, -8, -200);

echo 'Math pi (circle formula): ' . pi();
echo '<br />';
// look for the minimum number
echo "min from " . join(', ', $num1) . " is: " . min($num1);

// look for the maximum number
echo '<br />';
echo "min from " . join(', ', $num1) . " is: " . max($num1);

// negative to positive
$negative_number = -20;
echo '<br />';
echo "negative $negative_number to positive is: " . abs($negative_number);


// square root from 16;
$num_root = 16;
echo '<br />';
echo "square root from $num_root is: " . sqrt($num_root);


// math round from number
$num_ceil = .60;
$num_floor = .49;
echo '<br />';
echo "round number from $num_ceil is: " . round($num_ceil);
echo '<br />';
echo "round number from $num_floor is: " . round($num_floor);


// random number
echo '<br />';
echo 'Random number: ' . rand();
echo '<br />';
echo 'Random number between 7 to 83: ' . rand(7, 83);
