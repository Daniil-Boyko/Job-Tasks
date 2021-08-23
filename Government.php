<?php

class Government
{
    /**
     * @var Patient[]
     * @var Doctor[]
     */

    private array $listPatients = [];
    private array $listDoctors = [];
    protected int $numberPatient;
    protected int $numberDoctor;

    private function __construct (Patient $newPatient, Doctor $newDoctor)
    {
        $this -> listPatients[] = $newPatient;
        $this -> listDoctors[] = $newDoctor;
        // echo "new object created \n";
    }

    public static function getInstance ($newPatient,$newDoctor)
    {
        static $instance = null;
        if (null == $instance)
        {
            $instance = new static ($newPatient, $newDoctor);
        }
        else
        {
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
            $newPatient = new Patient;
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
            $newDoctor = new Doctor;
            $newDoctor -> inputHuman();
            echo "--- \n";
            $this -> listDoctors[$i] = $newDoctor;
        }
    }

    function outputListPatient()
    {
        echo "LIST OF PATIENTS: " . date('r') . " \n";
        for ($i = 0; $i < ($this -> numberPatient); $i++)
        {
            echo "PATIENT'S CARD [" . ($i+1) . "] \n";
            $this -> listPatients[$i] -> outputHuman();
            echo "\n \n";
        }
    }

    function outputListDoctor()
    {
       echo "LIST OF DOCTORS: " . date('r') . " \n";
        for ($i = 0; $i < ($this -> numberDoctor); $i++)
        {
            echo "DOCTOR'S CARD [" . ($i+1) . "] \n";
            $this -> listDoctors[$i] -> outputHuman();
            echo "\n \n";
        }
    }

    function outputAllInfo ()
    {
        echo date('r') . "\n";
        echo "-----LIST OF PATIENTS----- \n";
        for ($i = 0; $i < ($this -> numberPatient); $i++)
        {
            echo "PATIENT'S CARD [" . ($i+1) . "] \n";
            $this -> listPatients[$i] -> outputHuman();
            echo "\n \n";
        }

        echo "-----LIST OF DOCTORS----- \n";
        for ($i = 0; $i < ($this -> numberDoctor); $i++)
        {
            echo "DOCTOR'S CARD [" . ($i+1) . "] \n";
            $this -> listDoctors[$i] -> outputHuman();
            echo "\n \n";
        }
    }

}