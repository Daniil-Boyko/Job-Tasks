<?php

$inputnumber = readline("number =");

function isPalindrome(int $input)
{
    echo "Tap 2 for output the information about palindrome in binary system: \n";
    echo "Tap 8 for output the information about palindrome in octal system: \n";
    echo "Tap 10 for output the information about palindrome in decimal system: \n";
    echo "Tap 16 for output the information about palindrome in hexadecimal system: \n";
    echo "Tap 0 for output the information about palindrome in all systems: \n";

    $binFlag = false;
    $octFlag = false;
    $decFlag = false;
    $hexFlag = false;

    $binNumber = decbin($input);
    $octNumber = octdec($input);
    $decNumber = decbin($input);
    $hexNumber = hexdec($input);

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

    if ($reverseNumber == $binNumber)
    {
        $octFlag = true;
    }

    $decNumber = strval($decNumber);
    $decNumber = preg_replace('/[^0-9.]+/', '', $decNumber);
    $reverseNumber = strrev($decNumber);

    if ($reverseNumber == $binNumber)
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

}