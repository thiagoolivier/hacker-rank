<?php
/*
This function gets the time with AM or PM and returns as "HH:mm:ii"
*/


$sample = "12:45:54PM";

function timeConversion($input)
{
    
    if (str_contains($input, "PM"))
    {
        $woLetters = substr($input, 0, 8);
        
        $verifyHour = (string)(substr($input, 0, 2));
        
        if ($verifyHour === '12') {
            return $woLetters;
        }
                
        $hour = (string)(substr($input, 0, 2) + 12);
        
        if($hour === '24') {
            $hour = '00';
        }

        if($hour <= '23' && $hour >= '00') {
            return substr_replace($woLetters, $hour, 0, 2);
        }
        
    } else {

        $woLetters = substr($input, 0, 8);
        
        $hour = (substr($input, 0, 2));

        if($hour === '12') {
            $hour = '00';
        }

        return substr_replace($woLetters, $hour, 0, 2);

    }

}

echo timeConversion($sample);

?>