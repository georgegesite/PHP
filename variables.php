
<?php
// Variables are dynamically typed
$n = 0;
echo 'n = ' . $n . PHP_EOL; // Output: n = 0

$n = "abc";
echo 'n = ' . $n . PHP_EOL; // Output: n = abc

// Multiple assignments
$n = 0;
$m = "abc";
$z = false;

// Increment
$n = $n + 1; // good
$n += 1;     // good
// $n++;      // bad (PHP doesn't support this syntax for incrementing)

// None is null (absence of value)
$n = 4;
$n = null;
echo "n = " . $n . PHP_EOL; // Output: n = 


?>