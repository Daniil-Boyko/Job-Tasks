<?php

function isPalindrome(int $input)
{
    $binFlag = false;
    $octFlag = false;
    $decFlag = false;
    $hexFlag = false;

    $binNumber = decbin($input);
    $octNumber = decoct($input);
    $decNumber = $input;
    $hexNumber = dechex($input);

    $binNumber = strval($binNumber);
    $binNumber = preg_replace('/[^0-9.]+/', '', $binNumber);
    $reverseNumber = strrev($binNumber);

    // checking palindrome in each number system
    if ($reverseNumber == $binNumber)
    {
        $binFlag = true;
    }

    $octNumber = strval($octNumber);
    $octNumber = preg_replace('/[^0-9.]+/', '', $octNumber);
    $reverseNumber = strrev($octNumber);

    if ($reverseNumber == $octNumber)
    {
        $octFlag = true;
    }

    $decNumber = strval($decNumber);
    $decNumber = preg_replace('/[^0-9.]+/', '', $decNumber);
    $reverseNumber = strrev($decNumber);

    if ($reverseNumber == $decNumber)
    {
        $decFlag = true;
    }

    $hexNumber = strval($hexNumber);
    $hexNumber = preg_replace('/[^0-9.]+/', '', $hexNumber);
    $reverseNumber = strrev($hexNumber);

    if ($reverseNumber == $hexNumber)
    {
        $hexFlag = true;
    }

    if ($binFlag == true)
    {
        echo ($input . " is a palindrome in binary system " . "(" . $binNumber . ") \n");
    }

    if ($octFlag == true)
    {
        echo ($input . " is a palindrome in octal system " . "(" . $octNumber . ") \n");
    }

    if ($decFlag == true)
    {
        echo ($input . " is a palindrome in decimal system " . "(" . $decNumber . ") \n");
    }

    if ($hexFlag == true)
    {
        echo ($input . " is a palindrome in hexadecimal system " . "(" . $hexNumber . ") \n");
    }
}

isPalindrome(101);