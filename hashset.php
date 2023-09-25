<?php
// Create an empty array to simulate a set
$mySet = [];

// Add elements to the set
$mySet[] = 1;
$mySet[] = 2;
$mySet = array_unique($mySet); // Ensure uniqueness
print_r($mySet);
echo count($mySet) . PHP_EOL;

// Check if elements are in the set
echo in_array(1, $mySet) . PHP_EOL;
echo in_array(2, $mySet) . PHP_EOL;
echo in_array(3, $mySet) . PHP_EOL;

// Remove elements from the set
$key = array_search(2, $mySet);
if ($key !== false) {
    unset($mySet[$key]);
}
echo in_array(2, $mySet) . PHP_EOL;

// Convert list to a set
$list = [1, 2, 3];
$mySet = array_values(array_unique($list)); // Ensure uniqueness
print_r($mySet);

// Set comprehension (PHP does not natively support set comprehensions)
$list = range(0, 4);
$mySet = array_values(array_unique($list)); // Ensure uniqueness
print_r($mySet);
