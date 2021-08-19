<?php

spl_autoload_register(function ($className){
    include $className . '.php';
});

$newPatient = new patient;
$newDoctor = new doctor;

// echo "Enter number to output patients/doctors (P - patients, D - doctors): ";
// $modeNumber = readline ();
$result = government::getInstance($newPatient,$newDoctor);
$result -> inputListPatient ();
$result -> outputListPatient ();
$result -> inputListDoctor ();
$result -> outputListDoctor ();

$result2 = government::getInstance($newPatient,$newDoctor);
$result2 -> inputListPatient ();
$result2 -> outputListPatient ();
$result2 -> inputListDoctor ();
$result2-> outputListDoctor ();

$result -> outputListPatient ();
$result -> outputListDoctor ();
/*
if ($modeNumber == 'P')
{
    $result -> inputListPatient();
    echo "\n \n";
    echo "-----INFORMATION BOARD----- \n";
    $result -> outputListPatient();
}
else if ($modeNumber == 'D')
{
    $result -> inputListDoctor();
    echo "\n \n";
    echo "-----INFORMATION BOARD----- \n";
    $result -> outputListDoctor();
}
else if ($modeNumber == 'PD')
{
    echo "-----INFORMATION BOARD----- \n";
    $result -> inputListPatient();
    $result -> inputListDoctor();
    $result -> outputListPatient();
    $result -> outputListDoctor();
}
*/