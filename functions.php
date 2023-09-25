<?php
function myFunc($n, $m) {
    return $n * $m;
}

echo myFunc(3, 4) . PHP_EOL;

function outer($a, $b) {
    $c = "c";

    function inner() use ($a, $b, $c) {
        return $a . $b . $c;
    }

    return inner();
}

echo outer("a", "b") . PHP_EOL;

function double(&$arr, &$val) {
    function helper() use (&$arr, &$val) {
        // Modifying the array works
        foreach ($arr as &$n) {
            $n *= 2;
        }
        
        // Modifying the value works because we use the nonlocal keyword
        $val *= 2;
    }

    helper();
    print_r($arr);
    echo $val . PHP_EOL;
}

$nums = [1, 2];
$val = 3;
double($nums, $val);
?>
