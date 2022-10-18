<?php

$str = 'Hello welcome to WKWK land!';
$pattern = '/land/i'; // yang ada kata land nya

var_dump(preg_match($pattern, $str)); // 1
echo '<br />';

$str2 = 'The rain in SPAIN falls mainly on the plains. the the the';
$pattern2 = '/ain/i'; // yang ada kata ain nya

var_dump(preg_match_all($pattern2, $str2)); // 4
echo '<br />';

$pattern3 = '/^the/i'; // yang di awali the, walaupun banyak yang di awali the tapi di kembalikannya 1

var_dump(preg_match_all($pattern3, $str2)); // 1
echo '<br />';

$pattern4 = '/[^the]/i'; // mencari kata tidak termasuk the

var_dump(preg_match_all($pattern4, $str2)); // 42
echo '<br />';

$pattern5 = '/e$/i'; // mencari akhir dari kalimat yang hurufnya e

var_dump(preg_match_all($pattern5, $str2)); // 1
echo '<br />';

$pattern6 = '/(wk){2}/i'; // mencari kata wk yang di ulangi 2 kali

var_dump(preg_match_all($pattern6, $str)); // 1
echo '<br />';

$pattern7 = '/(w){1}(k){1}(w){1}(k){1}/i'; // mencari kata wk yang di ulangi 2 kali

var_dump(preg_match_all($pattern7, $str)); // 1
echo '<br />';

echo "length character $str2 is: " . strlen($str2);
