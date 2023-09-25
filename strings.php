<?php
// Strings are similar to arrays
$s = "abc";
echo substr($s, 0, 2) . PHP_EOL;

// But they are immutable in PHP
// $s[0] = "A";

// So this creates a new string
$s .= "def";
echo $s . PHP_EOL;

// Valid numeric strings can be converted
echo intval("123") + intval("123") . PHP_EOL;

// And numbers can be converted to strings
echo strval(123) . strval(123) . PHP_EOL;

// In rare cases you may need the ASCII value of a char
echo ord("a") . PHP_EOL;
echo ord("b") . PHP_EOL;

// Combine a list of strings (with an empty string delimiter)
$strings = ["ab", "cd", "ef"];
echo implode("", $strings) . PHP_EOL;
