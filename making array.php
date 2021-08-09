<?php

const MIN_ARRAY=0;
const MAX_ARRAY=100000;

for ($i=0; $i<MAX_ARRAY; $i++)
{
    $a[$i]=rand (0, 100000);
}
print_r($a);
