<?php

class patient
{
    protected int $agePatient;
    protected string $namePatient;
    protected string $specialityPatient;

    function __construct ()
    {
        $this -> agePatient = 0;
        $this -> namePatient = "None";
        $this -> specialityPatient = "None";
    }

    function inputHuman ()
    {
        echo "Enter name: ";
        $this -> namePatient = readline ();
        echo "Enter age: ";
        $this -> agePatient = readline ();
        echo "Enter speciality: ";
        $this -> specialityPatient = readline ();
    }

    function outputHuman ()
    {
        echo "Name: " . $this -> namePatient . "\n";
        echo "Age: " . $this -> agePatient . "\n";
        echo "Speciality: " . $this -> specialityPatient . "\n";
    }
}