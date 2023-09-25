<?php
// Arrays (called arrays in PHP)
$arr = [1, 2, 3];
print_r($arr);
echo "<br>";

// Can be used as a stack
array_push($arr, 4);
array_push($arr, 5);
print_r($arr);
echo "<br>";

array_pop($arr);
print_r($arr);
echo "<br>";

array_splice($arr, 1, 0, 7);
print_r($arr);
echo "<br>";

$arr[0] = 0;
$arr[3] = 0;
print_r($arr);
echo "<br>";

// Initialize arr of size n with default value of 1
$n = 5;
$arr = array_fill(0, $n, 1);
print_r($arr);
echo count($arr) . PHP_EOL;
echo "<br>";

// Careful: -1 is not out of bounds, it's the last value
$arr = [1, 2, 3];
echo $arr[count($arr) - 1] . PHP_EOL;
echo "<br>";

// Indexing -2 is the second to last value, etc.
echo $arr[count($arr) - 2] . PHP_EOL;
echo "<br>";

// Sublists (aka slicing)
$arr = [1, 2, 3, 4];
print_r(array_slice($arr, 1, 2));
echo "<br>";

// Similar to for-loop ranges, last index is non-inclusive
print_r(array_slice($arr, 0, 4));
echo "<br>";

// But no out of bounds error
print_r(array_slice($arr, 0, 10));
echo "<br>";

// Unpacking
list($a, $b, $c) = [1, 2, 3];
echo $a . " " . $b . " " . $c . PHP_EOL;
echo "<br>";


// Be careful though
// list($a, $b) = [1, 2, 3];

// Loop through arrays
$nums = [1, 2, 3];

// Using index
for ($i = 0; $i < count($nums); $i++) {
    echo $nums[$i] . PHP_EOL;
}
echo "<br>";

// Without index
foreach ($nums as $n) {
    echo $n . PHP_EOL;
}
echo "<br>";

// With index and value
foreach ($nums as $i => $n) {
    echo $i . " " . $n . PHP_EOL;
}
echo "<br>";
// Loop through multiple arrays simultaneously with unpacking
$nums1 = [1, 3, 5];
$nums2 = [2, 4, 6];
foreach (array_map(null, $nums1, $nums2) as [$n1, $n2]) {
    echo $n1 . " " . $n2 . PHP_EOL;
}
echo "<br>";


// Reverse
$nums = [1, 2, 3];
$nums = array_reverse($nums);
print_r($nums);
echo "<br>";


// Sorting
$arr = [5, 4, 7, 3, 8];
sort($arr);
print_r($arr);
echo "<br>";

rsort($arr);
print_r($arr);
echo "<br>";


$arr = ["bob", "alice", "jane", "doe"];
sort($arr);
print_r($arr);
echo "<br>";


// Custom sort (by length of string)
usort($arr, function ($a, $b) {
    return strlen($a) - strlen($b);
});
print_r($arr);
echo "<br>";

// List comprehension
echo "List Comprehension";
$arr = range(0, 4);
print_r($arr);
echo "<br>";

// 2-D arrays
$arr = array_fill(0, 4, array_fill(0, 4, 0));
print_r($arr);
echo $arr[0][0] . " " . $arr[3][3] . PHP_EOL;
echo "<br>";
// This won't work as expected (creates references)
// $arr = array_fill(0, 4, array_fill(0, 4, 0));
