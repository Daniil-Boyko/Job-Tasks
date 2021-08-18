<?php

class doctor extends patient
{
    protected string $nameDoctor;
    protected string $illness;
    protected string $dateReceipt;

    function __construct ()
    {
        $this -> nameDoctor = "None";
        $this -> illness = "None";
        $this -> dateReceipt = "None";
    }

    function inputDoctor ()
    {
        $this -> inputPatient();
        echo "Enter doctor's name: ";
        $this -> nameDoctor = readline ();
        echo "Enter illness: ";
        $this -> illness = readline ();
        echo "Enter date of receipt: ";
        $this -> dateReceipt = readline ();
    }

    function outputDoctor ($result2)
    {
        $this -> outputPatient($result2);
        echo "-----DOCTOR'S CARD----- \n";
        echo "Name: " . $result2 -> nameDoctor . "\n";
        echo "Illness: " . $result2 -> illness . "\n";
        echo "Date of receipt: " . $result2 -> dateReceipt . "\n";
    }
}
