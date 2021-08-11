<?php
echo "Enter the number to check palindromes: ";
$inputNumber = readline ("input=");

function isBinaryPalindrome (int $binInput): bool
{
    $binFlag = false;
    $binNumber = decbin($binInput);

    // checking palindrome in binary system
    $binNumber = strval($binNumber);
    $binNumber = preg_replace('/[^0-9.]+/', '', $binNumber);
    $reverseNumber = strrev($binNumber);

    if ($reverseNumber == $binNumber)
    {
        $binFlag = true;
    }
    return ($binFlag);
}
$resultBin=isBinaryPalindrome($inputNumber);

function isOctalPalindrome (int $octInput): bool
{
    $octFlag = false;
    $octNumber = decoct($octInput);

    //checking palindrome in octal system
    $octNumber = strval($octNumber);
    $octNumber = preg_replace('/[^0-9.]+/', '', $octNumber);
    $reverseNumber = strrev($octNumber);

    if ($reverseNumber == $octNumber)
    {
        $octFlag = true;
    }
    return ($octFlag);
}
$resultOct = isOctalPalindrome($inputNumber);

function isDecimalPalindrome (int $input): bool
{
    $decFlag = false;
    $decNumber = $input;

    //checking palindrome in decimal system
    $decNumber = strval($decNumber);
    $decNumber = preg_replace('/[^0-9.]+/', '', $decNumber);
    $reverseNumber = strrev($decNumber);

    if ($reverseNumber == $decNumber)
    {
        $decFlag = true;
    }
    return ($decFlag);
}
$resultDec=isDecimalPalindrome($inputNumber);

function isHexDecimalPalindrome (int $input): bool
{
    $hexFlag = false;
    $hexNumber = dechex($input);

    //checking palindrome in hex-decimal system
    $hexNumber = strval($hexNumber);
    $hexNumber = preg_replace('/[^0-9.]+/', '', $hexNumber);
    $reverseNumber = strrev($hexNumber);

    if ($reverseNumber == $hexNumber)
    {
        $hexFlag = true;
    }
    return ($hexFlag);
}
$resultHex=isHexdecimalPalindrome($inputNumber);

function OutputPalindrome(bool $flagBin, bool $flagOct, bool $flagDec, bool $flagHex): int
{

    if ($flagBin == true)
    {
        echo "Number is a palindrome in binary system \n";
    }

    if ($flagOct == true)
    {
        echo ("Number is a palindrome in octal system \n");
    }

    if ($flagDec == true)
    {
        echo ("Number is a palindrome in decimal system \n");
    }

    if ($flagHex == true)
    {
        echo ("Number is a palindrome in hex-decimal system \n");
    }

    return 0;
}

isBinaryPalindrome($inputNumber);
isOctalPalindrome($inputNumber);
isDecimalPalindrome($inputNumber);
isHexdecimalPalindrome($inputNumber);
OutputPalindrome ($resultBin, $resultOct, $resultDec, $resultHex);
