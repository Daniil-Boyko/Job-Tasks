<?php

spl_autoload_register(function ($className){
    include $className . '.php';
});

echo "Entering the patients and doctors: \n";
$factory = new Factory;
$result = $factory -> build();
$result -> inputListPatient();
$result -> inputListDoctor();

$flagMenu = true;
while ($flagMenu == true)
{
    echo "If you want to show menu bar - type 'menu'";
    $inputMenu = readline ();
    if ($inputMenu == 'menu')
    {
        echo "type 'Patient' to show all the patients \n";
        echo "type 'Doctors' to show all the doctors \n";
        echo "type 'Info' to show all the information \n";
        echo "type 'exit' to quit the program \n";
    }

    $outputInfo = readline();

    if ($outputInfo == "Patient")
    {
        $result->outputListPatient();
    }
    else if ($outputInfo == 'Doctors')
    {
        $result -> outputListDoctor();
    }
    else if ($outputInfo == 'Info')
    {
        $result -> outputAllInfo ();
    }
    else
    {
        $flagMenu = false;
        echo "quit the program";
    }
}
//checking singleton pattern
    /*
    $result2 = $factory -> build();
    $result2 -> inputListPatient ();
    $result2 -> outputListPatient ();
    $result2 -> inputListDoctor ();
    $result2-> outputListDoctor ();

    $result -> outputListPatient ();
    $result -> outputListDoctor ();
    */