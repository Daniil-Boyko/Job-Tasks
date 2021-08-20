<?php

class Factory
{
    public function build ()
    {
        $newPatient = $this -> buildPatient();
        $newDoctor = $this -> buildDoctor();
        return $this -> buildGovernment($newPatient, $newDoctor);
    }

    public function buildGovernment ($newPatient, $newDoctor)
    {
        return Government::getInstance($newPatient,$newDoctor);
    }

    public function buildPatient ():Patient
    {
        return new Patient();
    }

    public function buildDoctor ():Doctor
    {
        return new Doctor();
    }
}