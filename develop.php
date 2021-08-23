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
    echo "If you want to show menu bar - type 'Menu'";
    $inputMenu = readline ();
    if ($inputMenu == 'Menu')
    {
        echo "type 'Patients' to show all the patients \n";
        echo "type 'Doctors' to show all the doctors \n";
        echo "type 'Info' to show all the information \n";
        echo "type 'Exit' to quit the program \n";
    }

    $outputInfo = readline();

    if (($outputInfo == "Patients") or ($outputInfo == 'patients') or ($outputInfo == 'PATIENTS'))
    {
        $result->outputListPatient();
    }
    else if (($outputInfo == 'Doctors') or ($outputInfo == 'doctors') or ($outputInfo == 'DOCTORS'))
    {
        $result -> outputListDoctor();
    }
    else if (($outputInfo == 'Info') or ($outputInfo == 'info') or ($outputInfo == 'INFO'))
    {
        $result -> outputAllInfo ();
    }
    else
    {
        $flagMenu = false;
        echo "Quit the program";
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