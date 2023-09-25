<?php
// Create a min heap
$minHeap = new SplMinHeap();

$minHeap->insert(3);
$minHeap->insert(2);
$minHeap->insert(4);

// Min is always at the top
echo $minHeap->top() . PHP_EOL;

while (!$minHeap->isEmpty()) {
    echo $minHeap->extract() . PHP_EOL;
}

// Create a max heap by negating values
$maxHeap = new SplMinHeap();

$maxHeap->insert(-3);
$maxHeap->insert(-2);
$maxHeap->insert(-4);

// Max is always at the top (negate to get the actual value)
echo -1 * $maxHeap->top() . PHP_EOL;

while (!$maxHeap->isEmpty()) {
    echo -1 * $maxHeap->extract() . PHP_EOL;
}

// Build a min heap from initial values
$arr = [2, 1, 8, 4, 5];
$minHeap = new SplMinHeap();

foreach ($arr as $value) {
    $minHeap->insert($value);
}

while (!$minHeap->isEmpty()) {
    echo $minHeap->extract() . PHP_EOL;
}
