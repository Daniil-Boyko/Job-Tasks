<?php
$flagPat = true;

class DataPatient
{
    protected $namePatient;
    protected $agePatient;
    protected $genderPatient;

    public function __construct()
    {
        $this->namePatient = "none";
        $this->agePatient = 0;
    }

    public function inputPatient()
    {
        echo "Enter the name of the patient: ";
        $this->namePatient = readline();
        echo "Enter the age of the patient: ";
        $this->agePatient = readline();
        echo "Enter gender: ";
        $this->genderPatient = readline();
    }

    public function outputPatient()
    {
        echo "--------Patient's part-------- \n";
        echo "Name: " . $this->namePatient . "\n";
        echo "Age: " . $this->agePatient . "\n";
        echo "Sex: " . $this->genderPatient . "\n";
    }
}

echo "----------------------------------- \n";

class DoctorsServices extends DataPatient
{
    protected $nameDoctor;
    protected $specDoctor;
    protected $illness;
    protected $number;

    public function __construct()
    {
        parent::__construct();
        $this->nameDoctor = "none";
        $this->specDoctor = "none";
        $this->illness = "none";
        $this->number = 0;
    }

    public function inputDoctor()
    {
        echo "Enter the number of your patient: ";
        $this->number = readline();
        parent::inputPatient();
        echo "Enter the specialization: ";
        $this->specDoctor = readline();
        echo "Enter your name and credentials (by doctor): ";
        $this->nameDoctor = readline();
        echo "Enter the illness: ";
        $this->illness = readline();
    }

    public function outputPatData()
    {
        echo "\n \n \n";
        echo "Patient №" . $this->number . "\n";
        parent::outputPatient();
        echo "--------Doctor's part-------- \n";
        echo "Illness: " . $this->illness . "\n";
        echo "Specialization: " . $this->specDoctor . "\n";
        echo "Name and credentials (doctor): " . $this->nameDoctor . "\n";
    }
}

$doctorInfo = new DoctorsServices();
$doctorInfo->inputDoctor();
$doctorInfo->outputPatData();
