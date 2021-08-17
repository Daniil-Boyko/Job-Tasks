<?php
const AMOUNT_PATIENTS = 2;

class Man
{
    protected $age;
    protected $name;

    function __construct()
    {
        $this->age = 0;
        $this->name = "None";
    }

    function inputMan()
    {
        echo "Age: ";
        $this->age = readline();
        echo "Name: ";
        $this->name = readline();
    }

    function outputMan($person1)
    {
        echo "Age: " . $person1 -> age . "\n";
        echo "Name: " . $person1 -> name . "\n";
    }

}

class DataPatient extends Man
{
    protected $illness;

    public function __construct()
    {
        parent::__construct();
        $this -> illness = "none";
    }

    public function inputPatient()
    {
        echo "Input patient № \n";
        parent::inputMan();
        echo "Illness: ";
        $this->illness = readline();
    }

    public function outputPatient($person2)
    {
        echo "--------Patient's part-------- \n";
        echo "Patient № \n";
        parent::outputMan($person2);
        echo "Illness: " . $person2->illness . "\n";
    }
}

echo "----------------------------------- \n";

class DoctorsServices extends DataPatient
{
    protected $speciality;


    function __construct()
    {
        parent::__construct();
        $this->speciality = "None";
    }

    public function inputDoctor()
    {
        echo "Input doctor № \n";
        parent::inputMan();
        echo "Speciality: ";
        $this->speciality = readline();
    }

    public function outputPatData()
    {
        echo "Doctor № \n";
        parent::outputMan();
        echo "Speciality: " . $this->speciality . "\n";
    }
}


$doctorInfo = new DoctorsServices();

class Hospital extends DataPatient
{
    private $arrayPatient = array();

    function inputHospital()
    {
        for ($i = 0; $i < AMOUNT_PATIENTS; $i++)
        {
            $ii = $i+1;
            echo "Count of patients: " . $ii . "\n";
            $patient = new DataPatient();
            $patient -> inputPatient();
            $this -> arrayPatient[$i] = $patient;
        }
    }

    function print_hos()
    {
        for ($i = 0; $i < AMOUNT_PATIENTS; $i++)
        {
            $newPatient = $this -> arrayPatient[$i];
            $this -> outputPatient($newPatient);
        }
    }
}

$hos = new Hospital();
$hos -> inputHospital();
$hos -> print_hos();
