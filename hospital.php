<?php

class hospital extends doctor
{
    protected int $patientID;
    function __construct ()
    {
        $this -> patientID = 0;
    }

    function inputID ()
    {
        echo "Enter patient's ID: ";
        $this -> patientID = readline ();
        $this -> inputDoctor();
    }

    function outputInfo ($result3)
    {
        echo "Patient ID: " . $result3 -> patientID . "\n";
        $this -> outputDoctor($result3);

    }
}