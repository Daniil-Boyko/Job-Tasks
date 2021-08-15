<?php

echo "Enter the number of the day in a week: ";
$inputDay = readline('input=');

/**
 * @param $day
 * @return string
 */

function DayWeek($day): string
{
    switch ($day) {
        case 1:
            echo "Monday";
            break;

        case 2:
            echo "Tuesday";
            break;

        case 3:
            echo "Wednesday";
            break;

        case 4:
            echo "Thursday";
            break;

        case 5:
            echo "Friday";
            break;

        case 6:
            echo "Saturday";
            break;

        case 7:
            echo "Sunday";
            break;

    }

    return ($day);

}

DayWeek($inputDay);


