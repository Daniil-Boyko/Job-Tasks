<?php
class MinistryOfHealth extends hospital
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