<?php
// Create a "tuple" using an indexed array
$tup = [1, 2, 3];

// Access elements
echo $tup[0] . PHP_EOL;
echo $tup[count($tup) - 1] . PHP_EOL;

// Tuples in PHP are not immutable, so you can modify elements
$tup[0] = 0;

// Create a dictionary (HashMap) with a "tuple" as a key
$myMap = [];
$myMap[$tup] = 3;
print_r($myMap);

// Create a set (HashSet) with a "tuple" as an element
$mySet = [];
$mySet[] = $tup;
print_r($mySet);

// Check if a "tuple" is in the set
$tupleToCheck = [1, 2];
$found = false;
foreach ($mySet as $tuple) {
    if ($tuple === $tupleToCheck) {
        $found = true;
        break;
    }
}
echo $found ? "Found" : "Not found";
