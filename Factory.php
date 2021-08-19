<?php

class Factory
{
    public function build ()
    {
        $newPatient = $this -> buildPatient();
        $newDoctor = $this -> buildDoctor();
        return $this->buildGovernment($newPatient, $newDoctor);
    }

    public function buildGovernment ($newPatient, $newDoctor)
    {
        return government::getInstance($newPatient,$newDoctor);
    }

    public function buildPatient ():patient
    {
        return new patient();
    }

    public function buildDoctor ():doctor
    {
        return new doctor();
    }
}