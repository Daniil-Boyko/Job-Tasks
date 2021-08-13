<?php


//system configuration

function InputNumber1(): int
{
    echo "Enter the first number to calculate: ";
    $number1 = readline("input= \n");
    return ($number1);
}

function InputNumber2(): int
{
    echo "Enter the second number: ";
    $number2 = readline("input= \n");
    return ($number2);
}

function OperationSum($ch1, $ch2): int
{
    return $ch1 + $ch2;
}

function OperationMin($ch1, $ch2): int
{
    return $ch1 - $ch2;
}

function OperationMulti($ch1, $ch2): int
{
    return $ch1 * $ch2;
}

function OperationDel($ch1, $ch2): int
{
    return doubleval($ch1 / $ch2);
}

function ChooseOperation(): int
{
    echo "Choose the operation (+ , - , * , /) ";
    $operation = readline("input =");

    if ($operation == '+') {
        $result = OperationSum(InputNumber1(), InputNumber2());
        echo "Result = " . $result;
    }

    if ($operation == '-') {
        $result = OperationMin(InputNumber1(), InputNumber2());
        echo "Result = " . $result;
    }

    if ($operation == '*') {
        $result = OperationMulti(InputNumber1(), InputNumber2());
        echo "Result = " . $result;
    }

    if ($operation == "/") {
        $result = OperationDel(InputNumber1(), InputNumber2());
        echo "Result = " . $result;
    }

    echo "\n";
    return $result;
}

// UI design
function ContinueOperations(): string
{
    $flag = true;

    while ($flag == true) {
        echo "Do you want to continue? \n";
        $cont = readline("input = ");
        if (($cont == 'Y') || ($cont == 'yes') || ($cont == 'Yes')) {
            ChooseOperation();
        } else {
            echo "Bye";
            $flag = false;
        }
    }
    return 0;
}

ChooseOperation();
ContinueOperations();