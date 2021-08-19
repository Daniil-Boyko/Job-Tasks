<?php
class MinistryOfHealth extends hospital
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