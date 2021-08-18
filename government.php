<?php

class government extends MinistryOfHealth
{
    /**
     * @var array
     */

    private array $DataSummary = [];

    function inputGovernment ()
    {
        for ($i = 0; $i < AMOUNT_ARRAY; $i++)
        {
            $card = new MinistryOfHealth;
            $card -> inputResultInfo();
            $this -> DataSummary[$i] = $card;
        }
    }

    function outputGovernment ()
    {
        for ($i = 0; $i < AMOUNT_ARRAY; $i++)
        {
            $newCard = $this -> DataSummary[$i];
            $this -> outputResultInfo($newCard);
            echo "\n \n \n";
        }
    }
}