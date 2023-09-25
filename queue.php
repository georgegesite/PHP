<?php
// Create an empty array to simulate a deque
$queue = [];

// Enqueue (append) elements to the right
array_push($queue, 1);
array_push($queue, 2);
print_r($queue);

// Dequeue (remove and return) elements from the left
array_shift($queue);
print_r($queue);

// Enqueue elements to the left
array_unshift($queue, 1);
print_r($queue);

// Dequeue elements from the right
array_pop($queue);
print_r($queue);
