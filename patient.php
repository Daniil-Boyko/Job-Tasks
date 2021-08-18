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

    function inputPatient ()
    {
        echo "Enter name: ";
        $this -> namePatient = readline ();
        echo "Enter age: ";
        $this -> agePatient = readline ();
        echo "Enter speciality: ";
        $this -> specialityPatient = readline ();
    }

    function outputPatient ($result1)
    {
        echo "-----PATIENT'S CARD----- \n";
        echo "Name: " . $result1 -> namePatient . "\n";
        echo "Age: " . $result1 -> agePatient . "\n";
        echo "Speciality: " . $result1 -> specialityPatient . "\n";
    }
}