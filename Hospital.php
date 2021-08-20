<?php

class Hospital extends Doctor
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

    function outputInfo ()
    {
        echo "Patient ID: " . $this -> patientID . "\n";
        $this -> outputDoctor();

    }
}