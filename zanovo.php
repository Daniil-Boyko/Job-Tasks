<?php

const AMOUNT_ARRAY = 2;

class Patient
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

class Doctor extends Patient
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

    function outputInfo ($result3)
    {
        echo "Patient ID: " . $result3 -> patientID . "\n";
      $this -> outputDoctor($result3);

    }
}

class MinistryOfHealth extends Hospital
{

    function inputResultInfo ()
    {
        $this -> inputID();
    }

    function outputResultInfo ($result4)
    {
        echo "-----INFORMATION BOARD----- \n";
        $this -> outputInfo($result4);
    }
}

class government extends MinistryOfHealth
{
    private array $DataSummary = [];

    function inputGovernment ()
    {
        for ($i = 0; $i < AMOUNT_ARRAY; $i++)
        {
            $card = new MinistryOfHealth;
            $card -> inputResultInfo();
            $this -> DataSummary[$i] = $card;
        }
    }

    function outputGovernment ()
    {
        for ($i = 0; $i < AMOUNT_ARRAY; $i++)
        {
            $newCard = $this -> DataSummary[$i];
            $this -> outputResultInfo($newCard);
            echo "\n \n \n";
        }
    }
}

$result = new government;
$result -> inputGovernment();
$result -> outputGovernment();