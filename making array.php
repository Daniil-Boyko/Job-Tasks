<?php

$start=microtime(true);
define (MIN_ARRAY, 1);
define (MAX_ARRAY, 1000000);

$numbers = array();
do {
    $already_here = rand(MIN_ARRAY,MAX_ARRAY);
    if (!isset($numbers[$already_here]))
    {
        $numbers[$already_here] = true;
    }
} while (count($numbers) < MAX_ARRAY);
print_r(array_keys($numbers));


echo 'Time: '.round(microtime(true) - $start, 4).' сек.';