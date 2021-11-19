<?php

class Government
{
    /**
     * @var Patient[]
     * @var Doctor[]
     */
#sdasdadasdasdasdasdasdadsadasdasdadasdasdasd
#sdsfsdfsdfs
    private array $listPatients = [];
    private array $listDoctors = [];
    protected int $numberPatient = 0;
    protected int $numberDoctor = 0;
    protected $filename;
    protected $data;

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
        $inputNumberPatient = readline ();
        echo "--- \n";
        for ($i = $this -> numberPatient; $i < ($inputNumberPatient + $this -> numberPatient); $i++)
        {
            echo "Patient [".($i+1)."] \n";
            $newPatient = new Patient;
            $newPatient -> inputHuman();
            $this -> listPatients[$i] = $newPatient;
            echo "--- \n";
        }
        $this -> numberPatient = $inputNumberPatient + $this -> numberPatient;
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

    function outputListPatient(): array
    {
        echo "LIST OF PATIENTS: " . date('r') . " \n";
        for ($i = 0; $i < ($this -> numberPatient); $i++)
        {
            echo "PATIENT'S CARD [" . ($i+1) . "] \n";
            $this -> listPatients[$i] -> outputHuman();
            echo "\n \n";
        }
//        $this -> filename = 'arrayPatient.txt';
//        $data = serialize($this -> listPatients);
//        file_put_contents($this -> filename, $data);
        return ($this->listPatients);
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