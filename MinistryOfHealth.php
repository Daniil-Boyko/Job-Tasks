<?php
class MinistryOfHealth extends Hospital
{

    function inputResultInfo ()
    {
        $this -> inputID();
    }

    function outputResultInfo ()
    {
        echo "-----INFORMATION BOARD----- \n";
        $this -> outputInfo();
    }
}