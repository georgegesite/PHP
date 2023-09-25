<?php
// Create an empty associative array to simulate a dictionary
$myMap = [];

// Add key-value pairs to the dictionary
$myMap["alice"] = 88;
$myMap["bob"] = 77;
print_r($myMap);
echo count($myMap) . PHP_EOL;

// Update a value for a key
$myMap["alice"] = 80;
echo $myMap["alice"] . PHP_EOL;

// Check if a key exists in the dictionary
echo array_key_exists("alice", $myMap) . PHP_EOL;

// Remove a key-value pair from the dictionary
unset($myMap["alice"]);
echo array_key_exists("alice", $myMap) . PHP_EOL;

// Initialize a dictionary using an array literal
$myMap = [ "alice" => 90, "bob" => 70 ];
print_r($myMap);

// Dictionary comprehension (PHP does not natively support dict comprehensions)
$myMap = [];
foreach (range(0, 2) as $i) {
    $myMap[$i] = 2 * $i;
}
print_r($myMap);

// Looping through dictionaries
$myMap = [ "alice" => 90, "bob" => 70 ];

// Using keys
foreach (array_keys($myMap) as $key) {
    echo $key . " " . $myMap[$key] . PHP_EOL;
}

// Using values
foreach ($myMap as $val) {
    echo $val . PHP_EOL;
}

// Using keys and values
foreach ($myMap as $key => $val) {
    echo $key . " " . $val . PHP_EOL;
}
