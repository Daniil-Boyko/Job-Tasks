<?php

class government
{
    /**
     * @var patient[]
     * @var doctor[]
     */

    private $listPatients = [];
    private $listDoctors = [];
    protected int $numberPatient;
    protected int $numberDoctor;

    private function __construct(patient $newPatient, doctor $newDoctor)
    {
        $this -> listPatients[] = $newPatient;
        $this -> listDoctors[] = $newDoctor;
        echo "new object created \n";
    }

    public static function getInstance ($newPatient,$newDoctor)
    {
        static $instance = null;
        if (null == $instance)
        {
            $instance = new static($newPatient, $newDoctor);
        }
        else {
            echo "ERROR: using existing class \n";
        }
        return $instance;
    }

    function inputListPatient()
    {
        echo "Count of Patients: ";
        $this -> numberPatient = readline ();
        echo "--- \n";
        for ($i = 0; $i < ($this -> numberPatient); $i++)
        {
            echo "Patient [".($i+1)."] \n";
            $newPatient = new patient;
            $newPatient -> inputHuman();
            $this -> listPatients[$i] = $newPatient;
            echo "--- \n";
        }
    }

    function inputListDoctor()
    {
        echo "Count of Doctors: ";
        $this -> numberDoctor = readline ();
        echo "--- \n";
        for ($i = 0; $i < ($this -> numberDoctor); $i++)
        {
            echo "Doctor [".($i+1)."] \n";
            $newDoctor = new doctor;
            $newDoctor -> inputHuman();
            echo "--- \n";
            $this -> listDoctors[$i] = $newDoctor;
        }
    }

    function outputListPatient()
    {
        for ($i = 0; $i < ($this -> numberPatient); $i++)
        {
            echo "PATIENT'S CARD [" . ($i+1) . "] \n";
            $this -> listPatients[$i] -> outputHuman();
            echo "\n \n";
        }
    }

    function outputListDoctor()
    {
        for ($i = 0; $i < ($this -> numberDoctor); $i++)
        {
            echo "DOCTOR'S CARD [" . ($i+1) . "] \n";
            $this -> listDoctors[$i] -> outputHuman();
            echo "\n \n";
        }
    }
}