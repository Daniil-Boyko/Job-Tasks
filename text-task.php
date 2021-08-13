<?php
//palindrome function
$input="noon";

/**
 * @param $input
 * @return bool
 */

function PalindromeFunction($input): bool
{
    $reverse = strrev($input);
    if ($reverse == $input)
        return true;
    else return false;
}

$result = PalindromeFunction($input);

if ($result == TRUE)
{
    echo $input . ' is palindrome';
}
else
{
    echo $input . ' is not palindrome';
}