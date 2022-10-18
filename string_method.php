<?php
$fullName = 'Yadi Apriyadi';

echo 'Full Name = ' . $fullName;
echo '<br />';
echo 'Character count is: ' . strlen($fullName);
echo '<br />';
echo 'Word count is: ' . str_word_count($fullName);

echo '<br />';

echo 'Reverse fullName: ' . strrev($fullName);

echo '<br />';

echo 'Search apriyadi: ' . strpos($fullName, 'Apriyadi');

echo '<br />';

echo 'Replace yadi with udin: ' . str_replace('Yadi', 'Udin', $fullName);
