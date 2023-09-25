<?php
// Division is decimal by default
echo 5 / 2 . PHP_EOL;

// Double slash rounds down
echo 5 / 2 . PHP_EOL;

// CAREFUL: most languages round towards 0 by default
// So negative numbers will round down

// A workaround for rounding towards zero
// is to use decimal division and then convert to int.
echo (int)(-3 / 2) . PHP_EOL;

// Modding is similar to most languages
echo 10 % 3 . PHP_EOL;

// Except for negative values
echo -10 % 3 . PHP_EOL;

// To be consistent with other languages modulo
echo fmod(-10, 3) . PHP_EOL;

// More math helpers
echo floor(3 / 2) . PHP_EOL;
echo ceil(3 / 2) . PHP_EOL;
echo sqrt(2) . PHP_EOL;
echo pow(2, 3) . PHP_EOL;

// Max / Min Int
echo (float)INF . PHP_EOL;
echo (float)-INF . PHP_EOL;

// PHP numbers are infinite so they never overflow
echo pow(2, 200) . PHP_EOL;

// But still less than infinity
echo (pow(2, 200) < (float)INF) . PHP_EOL;
