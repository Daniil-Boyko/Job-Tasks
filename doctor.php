<?php

class doctor extends patient
{
    protected string $nameDoctor;
    protected string $profession;
    protected int $polyclinicNumber;

    function __construct ()
    {
        $this -> nameDoctor = "None";
        $this -> profession = "None";
        $this -> polyclinicNumber = 0;
    }

    function inputHuman ()
    {
        echo "Enter doctor's name: ";
        $this -> nameDoctor = readline ();
        echo "Enter profession: ";
        $this -> profession = readline ();
        echo "Enter number of doctor's polyclinic: ";
        $this -> polyclinicNumber = readline ();
    }

    function outputHuman ()
    {
        echo "Name: " . $this -> nameDoctor . "\n";
        echo "Profession: " . $this -> profession . "\n";
        echo "Polyclinic's Number: " . $this -> polyclinicNumber . "\n";
    }
}
