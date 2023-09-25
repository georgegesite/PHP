<?php
$n = 1;
if ($n > 2)
    $n -= 1;
elseif ($n == 2)
    $n *= 2;
else
    $n += 2;

$n = 1;
$m = 2;
if (($n > 2 && $n != $m) || $n == $m)
    $n += 1;
echo $n;
