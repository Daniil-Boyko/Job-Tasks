<?php

$start=microtime(true);

const MIN_ARRAY = 1;
const MAX_ARRAY = 100000;
const AMOUNT_ARRAY=100000;

/**
 * @param $numbers
 * @return int|int[]|string[]
 */

function issArray ($numbers)
{
    $numbers = array();
    do {
        $already_here = rand(MIN_ARRAY, MAX_ARRAY);
        if (!isset($numbers[$already_here]))
        {
            $numbers[$already_here] = true;
        }
    } while (count($numbers) < AMOUNT_ARRAY);
    return (array_keys($numbers));
}
print_r(issArray(100000));

echo 'Time: '.round(microtime(true) - $start, 4).' sec.';